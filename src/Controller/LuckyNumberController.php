<?php declare(strict_types = 1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyNumberController
{
    /**
     * @return Response
     */
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
            echo "No number found. Don't be sad!";
        }

        return new Response(
            '<html lang="en"><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
