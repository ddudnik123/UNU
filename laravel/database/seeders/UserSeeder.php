<?phproute('login');

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name' => 'admin',
            'password' => bcrypt('12345678'),
            'email' => 'admin@gmail.com',
            'is_admin' => 1,
            'email_verified_at'=>Carbon::now()
        ]);
        User::create([
            'name' => 'testUser1',
            'password' => bcrypt('12345678'),
            'email' => 'testUser1@gmail.com',
            'email_verified_at'=>Carbon::now()
        ]);
        User::create([
            'name' => 'testUser2',
            'password' => bcrypt('12345678'),
            'email' => 'testUser2@gmail.com',
            'email_verified_at'=>Carbon::now()
        ]);
        User::create([
            'name' => 'testUser3',
            'password' => bcrypt('12345678'),
            'email' => 'testUser3@gmail.com',
            'email_verified_at'=>Carbon::now()
        ]);
        User::create([
            'name' => 'testUser4',
            'password' => bcrypt('12345678'),
            'email' => 'testUser4@gmail.com',
            'email_verified_at'=>Carbon::now()
        ]);
        User::create([
            'name' => 'testUser5',
            'password' => bcrypt('12345678'),
            'email' => 'testUser5@gmail.com',
            'email_verified_at'=>Carbon::now()
        ]);
        //$user->assignRole('admin');
    }

}
