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

        if(count($checkouts) > 0){
            return $this->findCheckout();
        }
        else{
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
        $book_id = $this->findCheckout();

        return [
            'book_id' => $book_id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
