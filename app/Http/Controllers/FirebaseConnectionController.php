<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseConnectionController extends Controller
{
    public function index()
    {
        $path = base_path('storage/firebase.json');

        if (!file_exists($path)) {
            die("This file path {$path} does not exist");
        }

        try {
            $factory = (new Factory)
                ->withServiceAccount($path)
                ->withDatabaseUri('https://gardenkatalog-default-rtdb.asia-southeast1.firebasedatabase.app');

            $database = $factory->createDatabase();
            $reference = $database->getReference('katalog');
            $reference->set([
                'connection' => true
            ]);
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();

            return response([
                'message' => 'Success',
                'value' => $value
            ]);

        } catch (Exception $e) {
            return response([
                'message' => $e->getMessage(),
                'status' => 'False'
            ]);
        }
    }
}
