<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Story;
use App\Email;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            productsTableSeeder::class,
            storyTableSeeder::class,
            emailTableSeeder::class,
        ]);

    }

}

class productsTableSeeder extends Seeder {

    public function run()
    {

        Products::create(array('name' => 'holy', 'price'=>'1100'));
    }

}


class storyTableSeeder extends Seeder {

    public function run()
    {

        Story::create(array(
        'title' => 'لوريم ابسم سيت اميت',
        'story'=>'المية الشهير سنغافورة أي لان, الجوي الجنود بعد عل. جهة جورج والمعدات ان, إذ جعل خطّة الخطّة الأراضي, بها لم بقيادة ابتدعها الفرنسية. ليبين بالرّد لم هذا, بداية مدينة التكاليف يكن ان. بـ مئات كانت ساعة مدن. وبداية ألمانيا عل انه, بـ شدّت معاملة بها, هو وجهان المحيط الثقيل عدد. فقد خيار بلديهما بل. فعل قد لعدم الغالي, رئيس وحرمان المتساقطة، نفس إذ.

        عن وقد الشرق، ديسمبر لليابان. أحكم جديدة أمدها أن عدم. أسر تم الفترة ابتدعها, العصبة الوراء الإقتصادي ذلك هو, فكانت بالعمل ألمانيا بل بين. وصل فكانت وباءت بـ, انه الساحل استطاعوا كل, كان عن فمرّ السفن الإتحاد. عدم من ماشاء غينيا.

        لدحر واستمرت دنو ٣٠. أما كل احداث استراليا،, من فرنسا قتيل، دنو. هو بحق بأيدي السيطرة, كانت المزيفة الإتحاد بحق قد. لدحر أثره، بقيادة ان ولم, سكان لإعادة عدد ما.

        كُلفة الهجوم بالرغم في تلك. ضرب و لعدم وزارة والحزب, بينما الطريق التاريخ، إذ يتم, بشكل يعادل اسبوعين ما عدد. ان تعد الصين بالولايات, غرّة، باستحداث مما أن. يطول الوراء تم دول.'
    ));
    }


}

class emailTableSeeder extends Seeder {

    public function run()
    {

        Email::create(array('email' => ''));
    }

}
