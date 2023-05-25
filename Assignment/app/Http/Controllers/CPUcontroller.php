<?php

namespace App\Http\Controllers;

use View;
use Log;

use Illuminate\Http\Request;
use App\Models\Motherboard;
use App\Models\CPU;
use App\Models\Compatibility;

class CPUcontroller extends Controller
{
    public function main()
    {
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = "NULL";
        $data = NULL;
        $data = compact('motherboard','cpu','compatibility','data');
        return view('main')->with($data);
    }
    public function cpu_search($id)
    {
        $compatibility = Compatibility::where('cpu_id', '=', $id)->get();
        $data = CPU::find($id);
        log::info($compatibility);
        log::info($data);
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $data = compact('motherboard','cpu','compatibility','data');
        return view('main')->with($data);;
    }
    public function motherboard_search($id)
    {
        $compatibility = Compatibility::where('motherboard_id', '=', $id)->get();
        $data = Motherboard::find($id);
        log::info($compatibility);
        log::info($data);
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $data = compact('motherboard','cpu','compatibility','data');
        return view('main')->with($data);;
    }
    public function admin()
    {
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        log::info($compatibility);
        log::info($motherboard);
        log::info($cpu);
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }


    public function motherboard_add(Request $request)
    {
        log::info($request);
        Motherboard::insert([
            'name' => $request['motherboard_name'],
            'spec_detail' => $request['spec_detail'],
        ]);
        log::info("done");
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }
    public function cpu_add(Request $request)
    {
        log::info($request);
        CPU::insert([
            'name' => $request['cpu_name'],
            'spec_detail' => $request['spec_detail'],
        ]);
        log::info("done");
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }
    public function compatibility_add(Request $request)
    {
        $motherboard = Motherboard::where('name', '=', $request['motherboard_name'])->first();
        $cpu = CPU::where('name', '=', $request['cpu_name'])->first();
        if (!is_null($motherboard) && !is_null($cpu)) {
            $compatibilityData = [
                'cpu_id' => $cpu->id,
                'motherboard_id' => $motherboard->id,
            ];
            Log::info($compatibilityData);
            Compatibility::insert($compatibilityData);
        }
        log::info("done");
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }


    public function motherboard_form($id)
    {
        
        $page='motherboard';
        $motherboard = Motherboard::find($id);
        $cpu = CPU::find(1);
        $compatibility=CPU::find(1);
        $data = compact('cpu','motherboard','compatibility','id','page');
        return view('form')->with($data);
    }
    public function cpu_form($id)
    {
        $page='cpu';
        $cpu = CPU::find($id);
        $motherboard = Motherboard::find(1);
        $compatibility=CPU::find(1);
        $data = compact('cpu','motherboard','compatibility','page');
        return view('form')->with($data);
    }
    public function compatibility_form($id)
    {
        $page='compatibility';
        $compatibility = Compatibility::find($id);
        log::info($compatibility);
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $data = compact('motherboard','cpu','compatibility','page');
        return view('form')->with($data);
    }

    public function motherboard_update($id,Request $request)
    {
        log::info($request);
        $motherboard = Motherboard::find($id);
        log::info($motherboard);
        $motherboard->name = $request['motherboard_name'];
        $motherboard->spec_detail = $request['motherboard_details'];
        log::info($motherboard);
        $motherboard->save();
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }
    public function cpu_update($id,Request $request)
    {
        log::info($request);
        $cpu = CPU::find($id);
        log::info($cpu);
        $cpu->name = $request['cpu_name'];
        $cpu->spec_detail = $request['cpu_details'];
        log::info($cpu);
        $cpu->save();
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }
    public function compatibility_update()
    {
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }


    public function motherboard_delete($id)
    {
        $motherboard = Motherboard::find($id);
        if(!is_null($motherboard)){
            log::info("delete");
            $motherboard->delete();
        }
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }
    public function cpu_delete($id)
    {
        $cpu = CPU::find($id);
        if(!is_null($cpu)){
            log::info("delete");
            $cpu->delete();
        }
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }
    public function compatibility_delete($id)
    {
        $compatibility = Compatibility::find($id);
        if(!is_null($compatibility)){
            log::info("delete");
            $compatibility->delete();
        }
        $motherboard = Motherboard::all();
        $cpu = CPU::all();
        $compatibility = Compatibility::all();
        $data = compact('motherboard','cpu','compatibility');
        return view('admin')->with($data);
    }
}
