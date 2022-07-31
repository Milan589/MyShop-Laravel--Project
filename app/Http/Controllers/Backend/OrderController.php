<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Order;
use App\Models\Backend\OrderDetail;
use App\Models\Backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends BackendBaseController
{
    // optimization of code
    protected $base_route = 'backend.order.';
    protected $base_view = 'backend.order.';
    protected $module = 'Order';

    public function __construct()
    {
        $this->model = new Order();
    }
    public function index()
    {
        $data['records'] =Order::where('order_status','Placed')->get();
        // $data['hot_products'] = Product::where('status', 1)->where('hot_key', 1)->get();
        // $data['flash_products'] = Product::where('status', 1)->where('flash_key', 1)->get();
        // $data['records'] = $this->model->orderby('created_at', 'desc')->get();
        return view($this->__loadDataToView($this->base_view . 'index'), compact('data'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // // public function create()
    // // {
    // //     $data['units'] = $this->model->pluck('name', 'id');
    // //     return view($this->__loadDataToView($this->base_view . 'create'), compact('data'));
    // // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate(
    //         [
    //             // 'name' => 'required',
    //             // 'key' => 'required',
    //         ]
    //     );
    //     try {
    //         $request->request->add(['created_by' => Auth::user()->id]);
    //         $record = $this->model->create($request->all());
    //         if ($record) {
    //             $request->session()->flash('success', $this->module . 'Created Successfully.');
    //         } else {
    //             $request->session()->flash('error', $this->module . 'Creation Failed!!');
    //         }
    //     } catch (\Exception $exception) {
    //         $request->session()->flash('error', 'Error: ' . $exception->getMessage());
    //     }
    //     return redirect()->route($this->base_route . 'index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['record'] = Order::where('id',$id)->first();
        if (!$data['record']) {
            request()->session()->flash('error', 'Error: Invalid Request');
            return redirect()->route($this->base_route . 'index');
        }
        return view($this->__loadDataToView($this->base_view . 'show'), compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['roles'] = $this->model->pluck('name', 'id');
        $data['record'] = $this->model->find($id);
        if ($data['record']) {
            return view($this->__loadDataToView($this->base_view . 'edit'), compact('data'));
        } else {
            request()->session()->flash('error', 'Invalid Request');
            return redirect()->route($this->base_route . 'index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['record'] = $this->model->find($id);
        $request->validate([
            'name' => 'required',
            'key' => 'required',
        ]);
        if (!$data['record']) {
            request()->session()->flash('error', 'Error: Invalid Request');
            return redirect()->route($this->base_route . 'index');
        }
        try {
            $request->request->add(['updated_by' => auth()->user()->id]);
            $record = $data['record']->update($request->all());
            if ($record) {
                $request->session()->flash('success', $this->module . ' update success');
            } else {
                $request->session()->flash('error', $this->module . ' update failed');
            }
        } catch (\Exception $exception) {
            $request->session()->flash('error', 'Error: ' . $exception->getMessage());
        }
        return redirect()->route($this->base_route . 'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request  $request, $id)
    {
        $data['record'] =  $this->model->find($id);
        if (!$data['record']) {
            request()->session()->flash('error', 'Error: Invalid Request');
            return redirect()->route($this->base_route . 'index');
        }
        if ($data['record']->delete()) {
            request()->session()->flash('success', $this->module . " delete success");
            return redirect()->route($this->base_route . 'index');
        } else {
            request()->session()->flash('error', $this->module . " deletion failed");
            return redirect()->route($this->base_route . 'index');
        }
    }
    // to display deleted data
    public function trash()
    {
        $data['records'] =  $this->model->onlyTrashed()->get();
        return view($this->__LoadDataToView($this->base_view . 'trash'), compact('data'));
    }

    // to restore data
    public function restore(Request $request, $id)
    {
        $data['record'] =  $this->model->onlyTrashed()->where('id', $id)->first();
        if (!$data['record']) {
            request()->session()->flash('error', 'Error: Invalid Request');
            return redirect()->route($this->base_route . 'index');
        }
        try {
            if ($data['record']) {
                $data['record']->restore();
                $request->session()->flash('success', $this->module . ' restored successfully!!');
            } else {
                $request->session()->flash('error', $this->module . ' failed to restore records');
            }
        } catch (\Exception $exception) {
            $request->session()->flash('error', 'Error: ' . $exception->getMessage());
        }

        return redirect()->route($this->base_route . 'index');
    }

    //permanent delete from database
    public function permanentDelete($id)
    {
        $data['record'] =  $this->model->onlyTrashed()->where('id', $id)->first();
        if (!$data['record']) {
            request()->session()->flash('error', 'Error: Invalid Request');
            return redirect()->route($this->base_route . 'index');
        }
        if ($data['record']->forceDelete()) {
            request()->session()->flash('success', $this->module . " successfully Deleted");
            return redirect()->route($this->base_route . 'index');
        } else {
            request()->session()->flash('error', $this->module . " error: Delete failed");
            return redirect()->route($this->base_route . 'index');
        }
    }
    //permission role
    public function assignPermission(Request  $request)
    {
        $data['record'] = $this->model->find($request->role_id);
        $data['record']->permissions()->sync($request->permission_id);
        $request->session()->flash('success', $this->module . ' Assigned Successfully.');
        return redirect()->route($this->base_route . 'index');
    }
}
