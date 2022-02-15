<?php


namespace App\classes;


class News
{
    protected $allNews;
    protected $result = [];

    public function index()
    {
        return [
            0=>[
                'id'          =>1,
                'category_id'=>1,
                'name'        =>'রাজধানীর যেসব এলাকায় মঙ্গলবার গ্যাস থাকবে না',
                'description' =>'গ্যাসের পাইপলাইন প্রতিস্থাপনের জন্য মঙ্গলবার রাজধানীর কয়েকটি এলাকায় গ্যাস সরবরাহ বন্ধ থাকবে। 
                                    মঙ্গলবার বেলা ২টা থেকে সন্ধ্যা ৬টা পর্যন্ত মোট ৪ ঘণ্টা বন্ধ থাকবে গ্যাস সরবরাহ।....',
                'time_at'     => '৩৪ মিনিট আগে',
                'image'       =>'assets/img/n1.jpg',
            ],
            1=>[
                'id'          =>2,
                'category_id'=>1,
                'name'        =>'চট্টগ্রামে খুনের মামলায় এক ব্যক্তির যাবজ্জীবন',
                'description' =>'চট্টগ্রামে খুনের মামলায় এক ব্যক্তিকে যাবজ্জীবন কারাদণ্ড দিয়েছেন আদালত।
                                    একই সঙ্গে আসামিকে এক লাখ টাকা জরিমানা অনাদায়ে আরও ছয় মাসের কারাদণ্ড দেওয়া হয়েছে।...',
                'time_at'     => '১ ঘণ্টা আগে',
                'image'       =>'assets/img/n2.jpg',
            ],
            2=>[
                'id'          =>3,
                'category_id'=>1,
                'name'        =>'প্রয়াত বাবার সম্পত্তি থেকে হিন্দু কন্যাকে..',
                'description' =>'প্রয়াত বাবার রেখে যাওয়া সম্পত্তির (স্থাবর–অস্থাবর) উত্তরাধিকার থেকে হিন্দুধর্মাবলম্বী নারী বা কন্যাকে বঞ্চিত করার বিধান কেন 
                                    অসাংবিধানিক ঘোষণা করা হবে না,তা জানতে চেয়ে রুল দিয়েছেন হাইকোর্ট। ...',
                'time_at'     => '২ ঘণ্টা আগে',
                'image'       =>'assets/img/n3.jpg',
            ],
            3=>[
                'id'          =>4,
                'category_id'=>2,
                'name'        =>'ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি নিহত',
                'description' =>'ইসরায়েলি বাহিনীর গুলিতে এক ফিলিস্তিনি কিশোর নিহত হয়েছে। আজ সোমবার ফিলিস্তিনের পশ্চিম তীরে এ ঘটনা ঘটে।
                                    সেখানে সন্দেহভাজন এক ‘সন্ত্রাসী’র বাড়ি গুঁড়িয়ে দেওয়ার অভিযান চলাকালে ওই কিশোর নিহত হয়।..',
                'time_at'     => '১০ মিনিট আগে',
                'image'       =>'assets/img/n4.jpg',
            ],
            4=>[
                'id'          =>5,
                'category_id'=>2,
                'name'        =>'ভারতে আরও ৫৪টি চীনা অ্যাপ নিষিদ্ধ হচ্ছে',
                'description' =>'দেশের নিরাপত্তার জন্য হুমকি হয়ে ওঠায় আরও ৫৪টি চীনা অ্যাপ নিষিদ্ধ করার পরিকল্পনা করছে ভারত। সরকারি কিছু সূত্রের বরাতে এ তথ্য জানিয়েছে এনডিটিভি।
                                    এসব অ্যাপের মধ্যে রয়েছে সুইট সেলফি এইচডি, বিউটি ক্যাম, ..',
                'time_at'     => '৩৪ মিনিট আগে',
                'image'       =>'assets/img/n5.jpg',
            ],
            5=>[
                'id'          =>6,
                'category_id'=>2,
                'name'        =>'ইউক্রেন থেকে কিছু সেনা সরিয়ে নিচ্ছে কানাডা',
                'description' =>'ইউক্রেনে মোতায়েন কিছু সেনাসদস্যকে অস্থায়ীভাবে ইউরোপের অন্যত্র সরিয়ে নেওয়ার সিদ্ধান্ত নিয়েছে কানাডা। 
                                    ইউক্রেনে রাশিয়ার সম্ভাব্য সামরিক হামলার আশঙ্কা বাড়ার কারণে এ সিদ্ধান্ত নিয়েছে দেশটি।..',
                'time_at'     => '৬ ঘণ্টা আগে',
                'image'       =>'assets/img/n6.jpg',
            ],
            6=>[
                'id'          =>7,
                'category_id'=>3,
                'name'        =>'বাংলাদেশ সফরের জন্য আফগানিস্তানের দল ঘোষণা',
                'description' =>'হাশমতউল্লাহ শহীদিকে অধিনায়ক করে বাংলাদেশের বিপক্ষে তিন ম্যাচ ওয়ানডে সিরিজের দল ঘোষণা করেছে আফগানিস্তান ক্রিকেট বোর্ড। ...',
                'time_at'     => '৩৪ মিনিট আগে',
                'image'       =>'assets/img/n7.jpg',
            ],
            7=>[
                'id'          =>8,
                'category_id'=>3,
                'name'        =>'আইপিএলে দল পেলেন বিপিএলের কোন তারকারা',
                'description' =>'বিশ্বব্যাপী ফ্র্যাঞ্চাইজি লিগের জনপ্রিয়তা এখন বাকি সবার ধরাছোঁয়ার বাইরে। আর জাঁকজমক ও আগ্রহে ভারতের প্রিমিয়ার লিগ (আইপিএল) সবার শীর্ষে।
                                    আইপিএলের অনুকরণ বা অনুসরণ করে বিভিন্ন দেশ নিজ নিজ টি-টোয়েন্টি লিগ চালু করেছে। বাংলাদেশের যেমন আছে বিপিএল। ...',
                'time_at'     => '৯ ঘণ্টা আগে',
                'image'       =>'assets/img/n8.jpg',
            ],
            8=>[
                'id'          =>9,
                'category_id'=>3,
                'name'        =>'সাকিবের সঙ্গে কথা বলেছিল আইপিএলের ২ দল, শিশিরের দাবি',
                'description' =>'এবারের আইপিএলে খেলা হচ্ছে না সাকিব আল হাসানের। গতকাল সন্ধ্যায় ব্যাপারটি নিশ্চিত হয়ে গেছে।
                                    এই প্রথম আইপিএলের নিলামে উঠেও বিক্রি হলেন না বিশ্বের অন্যতম সেরা এই অলরাউন্ডার।...',
                'time_at'     => '১৬ ঘণ্টা আগে',
                'image'       =>'assets/img/n9.jpg',
            ],
        ];
    }
    public function shortNews($categoryID)
    {
        $this->allNews = $this->index();
        foreach ($this->allNews as $news)
        {
            if($news['id'] == $categoryID)
            {
               array_push($this->result, $news);
            }
            return $this->result;
        }
    }
}