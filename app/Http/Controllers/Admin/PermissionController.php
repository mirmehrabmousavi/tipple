<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * PermissionController constructor.
     */
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = $this->permission::all();
        return view('admin.permissions.index', ['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'group_name' => 'required',
            'name' => 'required',
        ]);
        $names = $request->get('name');
        $group_names = $request->get('group_name');

        if (is_array($names)) {
            foreach ($names as $key => $value) {
                $this->permission->create([
                    'group_name' => $group_names,
                    'name' => $value,
                ]);
            }
        }

        return redirect(route('permissions.index'))->with('success', 'Permission created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.permissions.edit', array(
            'permission' => Permission::where('id', '=', $id)->first()
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $permission = Permission::where('id', '=', $id)->first();
        $permission->group_name = $request->input('group_name');
        $permission->name = $request->input('name');
        $permission->save();
        return redirect(route('permissions.edit', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy($id)
    {
        $permission = Permission::where('id', '=', $id)->first();
        $permission->delete();
        return redirect(route('permissions.index'));
    }
}
