<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Checkout;
use App\Models\User;


class CheckoutFactory extends Factory
{


    public function findCheckout(){
        $book_id = Book::all()->random()->id;

        $checkouts = Checkout::where('book_id', $book_id)->get()->toArray();
        // dd($checkouts);
        print_r(count($checkouts) . "\n");
        if(count($checkouts) > 0){
            print_r("recursive call\n");
            // recurvise case
            return $this->findCheckout();
        }
        else{
            // base case
            print_r("found correct book_id: $book_id. \nreturning for next or final\n");
            return $book_id;
        }
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        print_r("finding new checkout\n");

        $book_id = $this->findCheckout();
        print_r("found final book id for this faker instance: $book_id\n");


        return [
            'book_id' => $book_id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
