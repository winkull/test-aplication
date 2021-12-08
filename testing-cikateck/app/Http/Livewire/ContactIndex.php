<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Null_;

class ContactIndex extends Component
{
    public $name, $phone;

    public $contact = [ ];

    public function render()
    {
        $this->contact = Contact::all()->toArray();
        return view('livewire.contact-index', ['contact' => $this->contact])
        ->extends('layout.app')
        ->section('content');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
            'phone' => 'required|max:15'
        ]);
        $contact      = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
        ]);
        $this->resetForm();        
        session()->flash('message', "Contact ".$contact['name']." was stored !!");
    }

    public function update($id, $index)
    {    

        $contacts = Contact::find($id);
        $contacts->update([
            'name' => $this->contact[$index]["name"],
            'phone' => $this->contact[$index]["phone"],
        ]);
        session()->flash('message', "Contact ".$this->contact[$index]["name"]." was updated !!");       
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        session()->flash('message', "Contact $contact->name was delete");
    }

    private function resetForm()
    {
        $this->name = null;
        $this->phone = null;
    }
}
