<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\User;
use App\Models\Goatvest;
use App\Models\Mitra;
use App\Models\Kurir;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
       $data=new category;
       $data->category_name=$request->category;
       $data->save();
       return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function edit_category($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view('admin.edit_category', compact('category'));
        }
        return redirect()->back()->with('error', 'Category not found');
    }
    

public function update_category(Request $request, $id)
{
    $request->validate([
        'category_name' => 'required|string|max:255',
    ]);

    $category = Category::find($id);
    if ($category) {
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->route('view_category')->with('message', 'Category updated successfully');
    }
    return redirect()->back()->with('error', 'Category not found');
}

    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_user()
    {
        $users = User::all();
        return view('admin.showuser', compact('users'));
    }

    public function add_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'usertype' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->usertype = $request->usertype;
        $user->save();

        return redirect()->back()->with('message', 'User added successfully');
    }

        public function edit_user($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('admin.edituser', compact('user'));
        }
        return redirect()->back()->with('error', 'User not found');
    }

    public function update_user(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'usertype' => 'required',
        ]);
    
        $user = User::find($id);
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->usertype = $request->usertype;
            $user->save();
    
            return redirect()->route('view_user')->with('message', 'User updated successfully');
        }
        return redirect()->back()->with('error', 'User not found');
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('message', 'User deleted successfully');
        }
        return redirect()->back()->with('error', 'User not found');
    }

    public function view_goatvest()
    {
        $goatvests = Goatvest::all();
        return view('admin.showgoatvest', compact('goatvests'));
    }

    public function add_goatvest(Request $request)
    {
        $request->validate([
            'foto_ktp' => 'nullable|image|max:2048', // Assuming you want to upload an image for foto_ktp
            'pendapatan_bulanan' => 'nullable|string|max:255',
            'sumber_penghasilan' => 'nullable|string|max:255',
            'kontak_lain' => 'nullable|string|max:255',
        ]);

        // Handle file upload if foto_ktp is present
        if ($request->hasFile('foto_ktp')) {
            $image = $request->file('foto_ktp');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads'), $imageName);
            $foto_ktpPath = 'uploads/'.$imageName;
        } else {
            $foto_ktpPath = null;
        }

        // Create a new Goatvest instance
        $goatvest = new Goatvest();
        $goatvest->foto_ktp = $foto_ktpPath;
        $goatvest->pendapatan_bulanan = $request->pendapatan_bulanan;
        $goatvest->sumber_penghasilan = $request->sumber_penghasilan;
        $goatvest->kontak_lain = $request->kontak_lain;
        $goatvest->save();

        return redirect()->back()->with('message', 'Goatvest entry added successfully');
    }

    public function edit_goatvest($id)
{
    $goatvest = Goatvest::find($id);
    if ($goatvest) {
        return view('admin.editgoatvest', compact('goatvest'));
    }
    return redirect()->back()->with('error', 'Goatvest entry not found');
}

public function update_goatvest(Request $request, $id)
{
    $request->validate([
        'pendapatan_bulanan' => 'nullable|string|max:255',
        'sumber_penghasilan' => 'nullable|string|max:255',
        'kontak_lain' => 'nullable|string|max:255',
    ]);

    $goatvest = Goatvest::find($id);
    if ($goatvest) {
        $goatvest->pendapatan_bulanan = $request->pendapatan_bulanan;
        $goatvest->sumber_penghasilan = $request->sumber_penghasilan;
        $goatvest->kontak_lain = $request->kontak_lain;
        $goatvest->save();

        return redirect()->route('view_goatvest')->with('message', 'Goatvest entry updated successfully');
    }
    return redirect()->back()->with('error', 'Goatvest entry not found');
}


    public function delete_goatvest($id)
    {
        // Find the goatvest entry by ID
        $goatvest = Goatvest::findOrFail($id);

        // Delete the goatvest entry
        $goatvest->delete();

        return redirect()->back()->with('message', 'Goatvest entry deleted successfully');
    }

    public function view_mitra()
    {
        $mitras = Mitra::all(); // Change variable name to plural
        return view('admin.showmitra', compact('mitras')); // Pass the correct variable to the view
    }

    // Method to add new mitra data
    public function add_mitra(Request $request)
    {
        $request->validate([
            'foto_ktp' => 'nullable|image|max:2048', // Validate foto_ktp input
            'foto_kandang' => 'nullable|image|max:2048', // Validate foto_kandang input
            'nama_peternakan' => 'required|string|max:255',
            'alamat_peternakan' => 'nullable|string|max:255',
            'kapasitas_kandang' => 'nullable|string|max:255',
            'jenis_kambing' => 'nullable|string|max:255',
            'lama_beternak' => 'nullable|string|max:255',
        ]);

        // Handle file upload if foto_ktp is present
        if ($request->hasFile('foto_ktp')) {
            $image = $request->file('foto_ktp');
            $foto_ktpName = time() . '_ktp.' . $image->extension();
            $image->move(public_path('uploads'), $foto_ktpName);
            $foto_ktpPath = 'uploads/' . $foto_ktpName;
        } else {
            $foto_ktpPath = null;
        }

        // Handle file upload if foto_kandang is present
        if ($request->hasFile('foto_kandang')) {
            $image = $request->file('foto_kandang');
            $foto_kandangName = time() . '_kandang.' . $image->extension();
            $image->move(public_path('uploads'), $foto_kandangName);
            $foto_kandangPath = 'uploads/' . $foto_kandangName;
        } else {
            $foto_kandangPath = null;
        }

        // Create a new Mitra instance
        $mitra = new Mitra();
        $mitra->nama_peternakan = $request->nama_peternakan;
        $mitra->alamat_peternakan = $request->alamat_peternakan;
        $mitra->kapasitas_kandang = $request->kapasitas_kandang;
        $mitra->jenis_kambing = $request->jenis_kambing;
        $mitra->lama_beternak = $request->lama_beternak;
        $mitra->foto_ktp = $foto_ktpPath;
        $mitra->foto_kandang = $foto_kandangPath;
        $mitra->save();

        return redirect()->back()->with('message', 'Mitra entry added successfully');
    }

    public function edit_mitra($id)
    {
        $mitra = Mitra::findOrFail($id); // Find the Mitra entry by ID
        return view('admin.editmitra', compact('mitra')); // Pass the Mitra data to the view
    }
    
    public function update_mitra(Request $request, $id)
    {
        $request->validate([
            // Add your validation rules here
        ]);
    
        $mitra = Mitra::findOrFail($id); // Find the Mitra entry by ID
    
        // Update Mitra data
        $mitra->nama_peternakan = $request->nama_peternakan;
        $mitra->alamat_peternakan = $request->alamat_peternakan;
        $mitra->kapasitas_kandang = $request->kapasitas_kandang;
        $mitra->jenis_kambing = $request->jenis_kambing;
        $mitra->lama_beternak = $request->lama_beternak;
    
        // Handle file upload for foto_ktp if present
        if ($request->hasFile('foto_ktp')) {
            $image = $request->file('foto_ktp');
            $foto_ktpName = time() . '_ktp.' . $image->extension();
            $image->move(public_path('uploads'), $foto_ktpName);
            $foto_ktpPath = 'uploads/' . $foto_ktpName;
            $mitra->foto_ktp = $foto_ktpPath;
        }
    
        // Handle file upload for foto_kandang if present
        if ($request->hasFile('foto_kandang')) {
            $image = $request->file('foto_kandang');
            $foto_kandangName = time() . '_kandang.' . $image->extension();
            $image->move(public_path('uploads'), $foto_kandangName);
            $foto_kandangPath = 'uploads/' . $foto_kandangName;
            $mitra->foto_kandang = $foto_kandangPath;
        }
    
        $mitra->save(); // Save the updated Mitra data
    
        return redirect()->back()->with('message', 'Mitra entry updated successfully');
    }

    public function delete_mitra($id)
    {
        // Find the mitra entry by ID
        $mitra = Mitra::findOrFail($id);

        // Delete the mitra entry
        $mitra->delete();

        return redirect()->back()->with('message', 'Mitra entry deleted successfully');
    }

    public function view_kurir()
    {
        $kurirs = Kurir::all();
        return view('admin.showkurir', compact('kurirs'));
    }

    public function create_kurir()
    {
        return view('admin.kurir.create');
    }

    public function store_kurir(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:kurir,email',
            'nomor_hp' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:L,P',
        ]);
    
        // Create a new Kurir instance with validated data
        Kurir::create($validatedData);
    
        // Redirect to the view page
        return redirect()->route('admin.kurir.view')->with('message', 'Kurir added successfully');
    }

    public function edit_kurir(Kurir $kurir)
    {
        return view('admin.editkurir', compact('kurir'));
    }

    public function update_kurir(Request $request, Kurir $kurir)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:kurir,email,' . $kurir->id,
            'nomor_hp' => 'required|string|max:20', // Change 'phone' to 'nomor_hp'
            'jenis_kelamin' => 'required|in:L,P',
        ]);
    
        // Update the Kurir instance with validated data
        $kurir->update($validatedData);
    
        // Redirect back to the showkurir page
        return redirect()->route('admin.kurir.view')->with('message', 'Kurir updated successfully');
    }

    public function delete_kurir(Kurir $kurir)
    {
        $kurir->delete();
        return redirect()->route('admin.kurir.view');
    }
}
