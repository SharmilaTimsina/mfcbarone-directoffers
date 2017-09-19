<?php

Class Horoscope {

    private $horoscope_data=array();

    public function __construct() {
        //define associative array here
 
    $this->horoscope_data[0]=Array
       ( 
             Array
                (
                    "day" => "1",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "في المجمل، أنت تمر بفترة استقرار، وبإمكانك الآن البدء في أعمالك بذهن صافي وصحة جيدة. في نفس الوقت، سوف تستمتع بيوم حيوي، لكن يجب التفكير في أن الأشياء لن تظل هكذا سهلة بلا نهاية. يجب أن تعمل على تأمين نجاحك الآن حتى تقوي موقفك في المستقبل.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "All in all, you are going through a period of stability, and now you can start your business with a clean mind and good health. At the same time, you will enjoy a vital day, but you must think that things will not remain so easy. You should work to secure your success now in order to strengthen your position in the future.",
                ),

            Array
                (
                    "day" => "1",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "يـُتنبأ باقتراب وقوع مشاكل غير متوقعة وتحفيزك على حلها أصعب من المعتاد، فلا تيأس وأعثر على بدائل. تساءل أيضًا إلى أي درجة ستأثر تلك المشاكل سلبيًا عليك شخصيًا. من الأفضل الانتظار والسماح بأن تجد المشاكل طريقها إلى الحل بمفردها.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Predict the approaching of unexpected problems and motivate you to solve them more difficult than usual, do not despair and find alternatives. Also ask to what degree these problems will negatively affect you personally. It is better to wait and let the problems find their way to the solution alone.",
                ),

           Array
                (
                    "day" => "1",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "خصص الفترة القادمة لإعادة الاتصال بأفراد عائلتك، فانغماسك ومشاركتك في حوارات مع أفراد العائلة سيلقى استحسان وترحاب حار من الجميع. اذا كان هناك أي خلافات عائلية لم تـُحل بعد، فهناك تنبؤ بأن الآن هو الوقت الأمثل للتوفيق وحسم الأمور.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Personalize your next time to reconnect with your family members. Fangmask and your participation in family conversations will be welcomed by everyone. If there are any unresolved family differences, there is a prediction that now is the perfect time to reconcile and settle things.",
                ),

            Array
                (
                    "day" => "1",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "أنت على وفاق وانسجام تام مع محيطك، سواء على المستوى الشخصي أو المهني. انتفع من هذا التناغم في تقوية علاقاتك والروابط القائمة بينك وبين الآخرين للتسلح في الأوقات العصيبة التي تكون فيها مجموعة الأبراج الكونية غير مبشرة والأحوال ليست لصالحك.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You are in perfect harmony with your surroundings, both personally and professionally. Benefit from this harmony in strengthening your relationships and links between you and others for armaments in difficult times in which the constellation of cosmic towers is not promising and conditions are not in your favor.",
                ),

             Array
                (
                    "day" => "1",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "استفد إلى أقصى درجة من جميع الفرص لتُدْخِل روحًا جديدة إلى أفكارك وخططك. الحديث مع الأصدقاء أو الزملاء وتغيير نظرتك الخارجية للأمور قد يكون مفيدًا. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Make the most of all opportunities to bring new spirit into your thoughts and plans. Talking to friends or colleagues and changing your external view of things may be helpful.",
                ),

             Array
                (
                    "day" => "1",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "كل شيء سهل في الوقت الحالي وأنت تستمتع حقًا بالأمور التي تقوم بها. سوف تترك أيضًا ورائك أثر من الجاذبية الإيجابية. لا تتعجب عندما يقترب منك من هم حولك ويبوحون لك بأفكارهم. لكن لا تكن مغرورًا – اشترك في المشروعات المختلفة لأنها قد تقدم لك الإلهام فيما يخص خططك الخاصة.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Everything is easy right now and you really enjoy things you do. You will also leave behind you the impact of positive gravity. Do not be surprised when people around you approach you and give you their ideas. But do not be cocky - get involved in different projects because they might inspire you with your own plans.",
                ),

            Array
                (
                    "day" => "1",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " اعتن بأسرتك أيضًا، فالآن وقت مناسب لحل النزاعات، وسوف يسهل عليك البدء في ذلك أيضًا. قد يكون الاتصال بالأسرة مفيدًا لصحتك بما أن الوصفات المنزلية والأمان الأسري من الأمور المفيدة عند المرض.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Take care of your family as well. Now is a good time to resolve disputes. Contacting your family may be beneficial to your health as home remedies and family safety are helpful when you are ill.",
                ),

           Array
                (
                    "day" => "1",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "لا تفقد تركيزك على الهدف الحقيقي، حتى مع وجوب اتخاذ قرارات صعبة. يمكنك التغلب على أي مشكلة صحية بالراحة، فالحياة ليست منافسة – لا يجب أن تحارب جاهدًا لكي تفوز.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Do not lose focus on the real goal, even with tough decisions. You can overcome any health problem at ease, life is not competitive - you do not have to fight hard to win.",
                ),

          Array
                (
                    "day" => "1",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "طاقتك معدية للآخرين، كما أن الوقت مناسب لتنفيذ أفكار جديدة. القرارات التي كنت قد أرجأتها حتى الآن قد تكون هامة جدًا بالنسبة لك . لكن على الرغم من طاقتك، يجب أن لا تتصرف بتسرع وأن تكون على دراية تامة بعواقب أفعالك. فكر في الأمور بعناية وبهدوء.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Your energy is infectious to others, and the time is right to implement new ideas. Decisions that you have postponed so far may be very important to you. But despite your energy, you should not act rashly and be fully aware of the consequences of your actions. Think carefully and quietly.",
                ),

            Array
                (
                    "day" => "1",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "وازن الأمور بعناية، وفكر في الأهداف التي تريد تحقيقها عن جد وتلك التي يجب التغاضي عنها. إذا استطعت تنفيذ ذلك، فسوف تجد أيضًا أن الحلول أصبحت أسهل.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Balance carefully, think about the goals you want to achieve and what you should overlook. If you can do that, you'll also find solutions easier.",
                ),

             Array
                (
                    "day" => "1",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تعتقد اليوم أن العلم يدور حولك، ولكن من هم حولك يرون الأمور بطريقة مختلفة، فلا تتعجب إن أصبت بخيبة أمل. اخفض من توقعاتك قليلاً وفكر في احتياجات الآخرين، وإلا فسوف تخلق أعداءً نتيجة لهذا السلوك الأناني، وسوف يتحاشى أصدقاؤك وعائلتك التعامل معك بشكل ملحوظ. تخلق الأنانية المشكلات دائمًا على المدى الطويل.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You think today that science is about you, but those around you see things differently. Do not be surprised if you are disappointed. Lower your expectations a bit and think about the needs of others, otherwise you will create enemies as a result of this selfish behavior, and your friends and family will avoid dealing with you significantly. Selflessness always creates problems in the long term.",
                ),

          Array
                (
                    "day" => "1",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "أنت تحمل حملاً ثقيلاً من المشكلات؛ ابدأ بتخفيف الأثقال عن كاهلك، وإلا فسوف تستمر المصاعب في الزيادة. يجب أن تصل إلى استراتيجية في التعامل مع التحديات المهنية والخاصة بدون إضاعة الكثير من الطاقة في نفس الوقت. لكن لا تضيع الكثير من الوقت في التفكير. فكل يوم يمر هو يوم مفقود من العمر. لقد حان الوقت لمواجهة الأمور مباشرةً دون تأجيل.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "You carry a heavy load of problems; start by loosening your weight, otherwise the difficulties will increase. You must reach a strategy in dealing with professional and special challenges without wasting too much energy at the same time. But do not waste too much time thinking. Every passing day is a lost day. It is time to face things directly without delay.",

                ),

        );

   $this->horoscope_data[1]= Array
        (
            Array
                (
                    "day" => "2",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تستطيع أخذ نفس عميق والاسترخاء، وقد حان الوقت لكي تفكر في نتائج المجهود الذي قمت به. استغل هذه المرحلة لتحسين حالتك الصحية. سوف تعطيك الفيتامينات والهواء النقي عقدًا جديدًا من الحياة والذي سيكون في غاية الأهمية. تستطيع التمتع بحياتك الخاصة أكثر وقضاء أوقات أكثر مع أصدقائك وعائلتك في حالة عدم وجود سوء تفاهم ونزاعات.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You can take a deep breath and relax, and it's time to think about the results of your effort. Use this stage to improve your health. Vitamins and fresh air will give you a new decade of life which will be extremely important. You can enjoy your own life more and spend more time with your friends and family in the absence of misunderstandings and disputes.",
                ),

            Array
                (
                    "day" => "2",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "على الرغم من أن كل شيء كان يسير بسلاسة من قبل، يقف شيء أو شخص ما في طريقك الآن. حدد مقدار القوة التي تحتاجها للتغلب على هذه العقبات أو ما إذا كان من الأفضل تجاهلها ببساطة. الآن يجب أن تستخدم قوتك بحكمة؛ لا تسمح لنفسك بأن تتعطل أو تتحول بسبب موضوعات صغيرة. لا تسيء استخدام طاقتك وقدرتك على الاحتمال بحيث لا يكون لها تأثير.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Although everything was going smoothly by, something or someone stands in your way now. Determine how much power you need to overcome these obstacles or whether it's best to simply ignore them. Now you must use your power wisely; do not allow yourself to be disrupted or transformed because of small subjects. Do not misuse your energy and your potential to have no effect.",
                ),

            Array
                (
                    "day" => "2",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اذا كنت ترغب في النجاح وفي تحقيق شيء ذو قيمة، فحان الوقت أن تتحالف مع الآخرين، قد يكونوا أقرباء أو أصدقاء أو زملاء في العمل. لا تدع الفرصة تفوتك، فيجب عليك الانتفاع من هذه الفرصة وبذل مجهود. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "If you want to succeed and achieve something valuable, it is time to ally yourself with others, they may be relatives, friends or co-workers. Do not let the opportunity pass, you should take advantage of this opportunity and make an effort. ",
                ),

           Array
                (
                    "day" => "2",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "سوف يطلب منك أصدقائك المقربين أو زملائك بالعمل المساعدة والعون، فلا تتأخر عن تقديم المساعدة قدر الإمكان، دون الانشغال عن سعيك لتحقيق أهدافك.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Your close friends or colleagues will ask you to help and help, so do not be too late to help, without worrying about your pursuit of your goals.",
                ),

             Array
                (
                    "day" => "2",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "كن منفتحًا للتجارب والأفكار الجديدة التي تُقَدم لك، ولكن لا تنقاد بعيدًا عن مسارك الأصلي. يجب أن تظل صادقًا مع ذاتك.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Be open to new experiences and ideas that offer you, but do not be driven away from your original path. You must remain true to yourself.",
                ),

            Array
                (
                    "day" => "2",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "حالتك البدنية والذهنية في أحسن حال، لذا لديك تأثير إيجابي كبير على الآخرين الذين يلاحظون مدى إيجابيتك ولمعانك بكامل ثقة. سوف تنفـُذ الحماسة التي تغمرك وتتخلل كل من تتعامل معه وتؤثر فيه، فتجدهم خير عون ومساعد لك في تنفيذ وتحقيق أهدافك التي ظننت أنها لن تتحقق. انتفع من تلك الطاقة الصادرة منك قبل أن يفوت الوقت ويمر دون ذلك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Your physical and mental state is at best, so you have a very positive impact on others who notice your positive and your full confidence. You will implement the enthusiasm that engulfs you and permeates everyone you deal with and influence. You will find them helpful and helpful in implementing and achieving your goals, which I thought would not be achieved. Benefit from that energy before you lose time and pass without it.",
                ),

           Array
                (
                    "day" => "2",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "روح الفريق التي تتمتع بها واضحة اليوم لأنك تضع الاحتياجات أولاً، وهذا ما يلاحظه زملاؤك. إذا استمريت هكذا، فسوف يعتبرونك القوة الدافعة",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "The team spirit you enjoy today is clear because you put needs first, and that's what your colleagues notice. If you continue like this, they will consider you the driving force",
                ),

            Array
                (
                    "day" => "2",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "سوف يتعرض عملك للاختبار اليوم، ولكن لا داعي للتوتر إذا كنت قادرًا على إظهار المعرفة السليمة. ستُختبر أيضًا في حياتك الخاصة، وفي هذه الحالة، يجب عليك الدفاع عن وجهة نظرك.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Your business will be exposed to the test today, but no need to stress if you are able to show proper knowledge. You will also be tested in your own life, in which case you must defend your point of view.",
                ),

           Array
                (
                    "day" => "2",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "أنظر إلى العالم من خلال عيون مفتوحة. المعارف القديمة قد تعيد لك حيويتك. استخدم طاقتك في الأنشطة الرياضية أيضًا. إذا لم يكن لديك الحافز السليم من قبل، يمكنك البدء الآن، أخيرًا.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Look at the world through open eyes. Old knowledge may restore your vitality. Use your energy in sports activities as well. If you do not have the proper motivation before, you can start now, finally.",
                ),

            Array
                (
                    "day" => "2",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "لا يبدو أن جبال المشكلات والاضطرابات اليومية في طريقها إلى التلاشي. كن حازمًا وحاول استعادة رأيك فيما هو مهم، وإلا قد تعاني من انتكاسات دائمة. .",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "The mountains of problems and daily troubles do not seem to be disappearing. Be firm and try to regain your mind of what is important, otherwise you may suffer permanent setbacks.",
                ),

             Array
                (
                    "day" => "2",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "في الوقت الحالي، أنت تخفض رأسك في يأس، وصحتك ليست في أحسن أحوالها. اثبت في مكانك اليوم، فالأوقات الجيدة قادمة. في الوقت الحالي، حاول أن تذكر نفسك بالذكريات السعيدة – وعندئذ سترى أن حتى هذه المرحلة السيئة سوف تمضي وسوف تشعر بشيء من التفاؤل.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Right now, you are reducing your head in despair, and your health is not at its best. Prove in your place today, good times are coming. For now, try to remind yourself of the happy memories - and then you'll see that even this bad phase will go on and you'll feel a little optimistic.",

                ),

             Array
                (
                    "day" => "2",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "يبدو في الوقت الحالي أنك تواجه عددًا متزايدًا من التعقيدات غير المتوقعة. لا يقع اللوم على من هم حولك – في بعض الأحيان تكون أنت المخطئ. حاول أن تظل هادئًا وأن ترى العقبات الموجودة في طريقك كوسيلة لاكتشاف مداخل جديدة. اعد اكتشاف هدوئك وسوف تخرج من هذه المرحلة أقوى.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "It seems that you are facing an increasing number of unexpected complications. Do not blame those around you - sometimes you're wrong. Try to stay calm and see the obstacles on your way as a way to discover new entrances. Rediscover your calmness and you will graduate from this stronger phase.",

                ),

        );
   

     $this->horoscope_data[2]=  Array
        (
            Array
                (
                    "day" => "3",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "كل ما تقوم بعمله حاليًا يتم على الفور وعلى أكمل وجه. كل شخص تتعامل معه من أصدقاء أو معارف أو زملاء بالعمل معجبون بحماسك وموهبتك في التعامل مع الأمور من الجانب الجيد وقدرتك على أداء كل شيء بكفاءة، مما يزيد من ثقتك بنفسك بدرجة عالية. احرص على تبادل هذا الإعجاب بنفس القدر وأن لا تنتابك النرجسية، فمتى ساءت الأمور وصارت بالعكس ، فإنك ستحتاج إلى ذلك الدعم والمعاملة",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Everything you do now is done immediately and to the fullest. Every person you work with friends, acquaintances, or coworkers admire your talent and ability to handle things from the good side and your ability to do everything efficiently, which increases your confidence to a high degree. Be sure to share this admiration equally and not to be plagued by narcissism. When things get worse and vice versa, you will need that support and treatment.",
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "سوف تقابلك التحديات بصورة متكررة بشكل غير عادي اليوم، مسببة لك الكثير من الضغوط. ربما يجب أن تبتعد عن الطريق أحيانًا بدلاً من تحمل مسئولية كل شيء. سوف يساعك هذا على توفير طاقتك للأشياء الهامة بحق، خاصة في العمل. يجب أيضًا أن تفكر في صحتك، لأنه على المدى الطويل لن يعود عليك بالفائدة أن تستهلك كل قوتك في مدة زمنية قصيرة.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Challenges will meet you extraordinarily frequently today, causing you a lot of stress. Maybe you should get away from the road sometimes instead of taking responsibility for everything. This will help you save your energy for really important things, especially at work. You should also think about your health, because in the long run it will not be worth your while to consume all your strength in a short period of time."
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " من المحتمل أن تنقلب عليك الأمور التي لم تحسمها بعد عندما لا تتواجد الفرص السانحة والظروف المبشرة المتاحة الآن.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "It is likely that things that have not yet been resolved will turn to you when the opportunities and the promising circumstances are not available.",
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "سوف تحصل على السكينة والصفاء الذهني اللذان طالما بحثت عنهما. من خلال تلك القوة الداخلية، فأنك تنبع منك الثقة والنزاهة.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You will get the serenity and serenity that you have always looked for. Through that inner strength, you derive trust and integrity from you",
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "كل ما كنت تهدف إليه منذ فترة طويلة أصبح من الممكن الوصول إليه، حيث تدفعك طاقة جديدة نابعة من الدعم المقدم لك من كل صوب لإتمام الخطوات الأخيرة اللازمة لذلك. حافظ على السير في خطى واقعية وواصل السعي وراء الوصول إلى أهدافك وسوف تؤتي ثمار ذلك.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Everything that you have been aiming at for a long time has become accessible, as new energy comes from your support from every direction to complete the last steps necessary. Keep in the footsteps of realistic and continue to pursue your goals and will bear fruit.",
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "صحتك الجسدية والعقلية في أحسن أحوالها، فلا تدع اللحظة تمر دون أن تسعى وراء أفكارك. سوف تكسب المؤيدين الذين يشاركوك في الأهداف ويمكنهم المضي قدمًا كفريق. هكذا تستطيع العمل اليوم بطريقة جيدة وتتقدم بشكل كبير لكي تصل في النهاية إلى أهدافك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Your physical and mental health at its best, do not let the moment pass without seeking your thoughts. You will win supporters who share your goals and can move forward as a team. So you can work today in a good way and progress significantly to finally reach your goals.",
                ),

          Array
                (
                    "day" => "3",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "بما أنك الآن تنضح بهالة خاصة من القوة والاستقرار، فإن الناس سوف يلجئون إليك من أجل المساعدة والدعم. حاول استخدام طاقتك في مساعدة الآخرين، حيث أنهم سوف يردون الجميل بالتأكيد في المرة القادمة التي تحتاج فيها إلى مساعدة. لكن حاول ألا تغفل عن أهدافك لأنك الآن تملك القوة اللازمة لتحقيقها",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Now that you have a special aura of strength and stability, people will come to you for help and support. Try using your energy to help others, so they will surely refund the beauty next time you need help. But try not to lose sight of your goals because you now have the power to achieve them",
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " لا تتصرف بتسرع وحافظ على طاقتك. انظر إلى هذه المشكلة كمهمة أخرى يجب إنجازها، وثق أنه لن يقف أمامك أي شيء",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Do not act impulsively and keep your energy. Look at this problem as another task that needs to be done, and trust that nothing will stand in front of you",
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "حان وقت توضيح الأمور، وهذا ينطبق على المهام المؤجلة وأيضًا سوء التفاهم بين الزملاء. الثقة التي تنضح بها مغرية وجذابة للآخرين.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "It is time to clarify things, and this applies to deferred tasks as well as misunderstanding between colleagues. Trust that exudes a seductive and attractive to others.",
                ),

            Array
                (
                    "day" => "3",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "لا شيء يسير حسب رغبتك في الوقت الحالي، ولكن إذا قمت بتغيير مدخلك، قد تنجز أهدافك بشكل أسرع، كما قد تساعد آراء الآخرين. سوف تواجه في حياتك الخاصة جميع أنواع المشكلات، ولكن يجب أن تكون وجهة نظرك واضحة في هذا الموقف. سلامتك الجسدية قد تصبح أفضل. فكر في أسلوب حياتك، ولكن لا تكن قاسيًا على نفسك.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Nothing works as you wish at the moment, but if you change your income, you may achieve your goals faster, and may help others' opinions. You will encounter all sorts of problems in your own life, but your point of view should be clear in this situation. Your physical integrity may become better. Think about your lifestyle, but do not be harsh on yourself.",
                ),

             Array
                (
                    "day" => "3",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تتأرجح اليوم بين الحماس والنشاط المفعم وبين فتور العزيمة والإحباط أكثر من المعتاد. حاول تذكر الماضي، فسوف تتيقن أن ما يبدو اليوم معقد جدًا، لن يكون له أهمية تمامًا عن قريب، ويساعدك هذا أيضًا في تقدير الأمور والصعوبات نسبيًا. هذا ما سيجعلك في وفاق مع ذاتك ومع محيطك وسيحقن جو المعارضة من حولك",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Is oscillating today between the enthusiasm and the busy activity and the coldness of determination and frustration than usual. Try to remember the past, make sure that what seems today is very complex, will not be very important soon, and this also helps you to assess things and difficulties relatively. This will make you in harmony with yourself and your surroundings and will inject the atmosphere of opposition around you",

                ),

             Array
                (
                    "day" => "3",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "لأول مرة خانتك الأنماط السلوكية الاعتيادية الخاصة بك ووضعتك في مواقف حرجة. استراتيجية الحلول التي تنتهجها في المعتاد لا تحسن من الأمور، مهما حاولت مرارًا وتكرارًا. كنوع من التغيير، حاول التخلي عن تلك الأنماط الاعتيادية واتخذ منهجًا جديدًا! القيام بتغيير حاسم سيكون المخرج للمواقف والمشاكل المستعصية.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "For the first time, you betrayed your usual behavioral patterns and put you in critical situations. Their strategy of solutions usually does not improve things, no matter how often you try. As a kind of change, try to abandon those common patterns and take a new approach! Making a decisive change will be the way out of stalemated situations and problems.",

                ),

        );
 $this->horoscope_data[3]= 
    Array
        (
             Array
                (
                    "day" => "4",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " يجب أن تفكر في نفسك من حين لآخر. مارس الرياضة أو اعمل على حل الكلمات المتقاطعة، عندئذ سترى أن تناغمك الداخلي مستمر لفترة، وربما تظهر فرص جديدة فيما يخص الحب",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You should think of yourself from time to time. Practice sports or work on crossword puzzles, then you'll see that your inner harmony is going on for a while, and new opportunities may arise for love",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "خذ فترات راحة كافية وارجع لرشدك، ويمكنك الاسترخاء من خلال الرياضة على أن لا تبالغ. اخلق قاعدة مالية آمنة وابتعد عن التخمين.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Take enough breaks and go back to guide you, and you can relax through the sport to not overdo it. Create a secure financial base and stay away from guesswork.",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "تشعر بالراحة التامة فيما يخص ذاتك والأمور التي تقوم بها، ويظهر عليك هذا الجو وينتقل إلى من هم قريبين منك. استغل الفرصة الآن للتواصل مع أشخاص بنفس العقلية. اكمل خططك بأفكار الآخرين وابدأ في العمل بطاقة مركزة، فما كان يبدو غير متاح قد أصبح الآن في متناول يدك.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "You feel very comfortable with yourself and what you do, and show you this atmosphere and move to those close to you. Take the opportunity now to connect with people with the same mentality. Complete your plans with others' ideas and start working with a focused card. What seems to be unavailable is now at your fingertips.",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " قد تظهر بعض العلاقات الجديدة والممتعة إذا أبديت رد فعل إيجابي. من الضروري أن تدع حالة النشوة الحالية على سجيتها. احتفل اليوم! ما رأيك في أن ترقص؟ سوف تعود عليك الحركة بالفائدة وتخلصك من الطاقة المكبوتة.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Some new and interesting relationships may appear if a positive reaction is shown. It is necessary to let the current ecstasy state on her chest. Celebrate today! What do you think about dancing? You will benefit from the movement and save you from the pent-up energy.",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " الأفكار غير العادية التي تراود شريكك قد تؤدي إلى فتح مسارات جديدة؛ كاشفة لجانب جديد تمامًا من ذاتك. إلا إنه يجب أن تظل متواضعًا، فالخط الذي يقع بين المُخاطرة والغرور رفيع للغاية.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "The unusual thoughts of your partner may open up new paths; revealing a whole new side of yourself. But it must remain modest. The line between risk and vanity is very high.",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "اليوم، مهاراتك التنظيمية والاجتماعية قوية على غير العادة، فيجب أن تستغل ذلك للسيطرة على الأمور. سوف تنجح في العمل وخارجه، وحتى في حياتك الشخصية، سوف ينتج عن نظرتك الدافئة للأمور الكثير من الفوائد. سوف يقدرك الناس ويعاملونك بمودة. فكر في إعادة بعض من هذه الأمور.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today, your organizational and social skills are unusually strong, you have to use it to control things. You will succeed at work and beyond, and even in your personal life, your warm view of things will result in many benefits. People will appreciate and treat you with affection. Think about returning some of these things.",

                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " سوف تتلقى دعمًا بشكل خاص من خلال العمل وكذلك حياتك الشخصية، أظهر حبك للآخرين بهدف تقوية العلاقات. قد تقابل اليوم حب حياتك، فافتح عينيك جيدًا!",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You will receive special support through work as well as your personal life, show your love for others in order to strengthen relationships. Today you may meet the love of your life, open your eyes well!",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "هناك ما يعوقك عن التقدم في اتجاه أهدافك، فلا تيأس أو تتوقع تلقي الكثير من المواساة من أي شخص. احشد قوتك واستمر في تتبع أحلامك – حتى وإن كان لابد من تغييرها بعض الش",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "There is something that hinders you from moving towards your goals, so do not despair or expect to receive much sympathy from anyone. Gather your strength and continue to follow your dreams - even if you have to change some of them",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "استعد لشيء خاص، وذلك لأن المحيطين بك مبهورون بك. إذا أردت البدء في مشروعات جديدة، لن يكون لديك نقص في عدد المؤيدين",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Get ready for something special, because your surroundings are dazzled. If you want to start new projects, you will not have a shortage of supporters",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "عن قريب، ستواجه تحديات وعراقيل صعبة. قد يتواجد من يعمل ضدك أو يسبب مضايقات بتواجده بالمكان، وذلك سعيًا للإخلال بتوازنك. بالتالي يجب الأخذ بعين الاعتبار أقل تأثير سلبي قد يكون لتلك العوائق العابرة على مسار حياتك في حالة ما اذا قررت تجاهلها بكل بساطة.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Soon, you will face difficult challenges and obstacles. There may be someone working against you or causing harassment by being there, in order to disturb your balance. Therefore, you should consider the least negative impact that these obstacles may have on your life path if you decide to ignore them simply.",
                ),

             Array
                (
                    "day" => "4",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => ".سوف تتعرض لمواقف تفتح أمامك أبواب لفرص جديدة، وفي تلك اللحظة، ستدرك أن الوقت حان وعليك تعبئة كل قواك وجميع طاقاتك.  ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You will be exposed to situations that open doors to new opportunities, and at that moment, you will realize that the time has come and you must mobilize all your strengths and all your energies.",

                ),

             Array
                (
                    "day" => "4",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "الكثير من الموضوعات في الوقت الحالي لا تسير بالسلاسة التي خططت لها، وربما يجب عليك قبول الأشياء التي لا تستطيع تغييرها",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Many topics at the moment are not going as smoothly as you planned, and you may have to accept things that you can not change",

                ),

        );
  $this->horoscope_data[4]= 

     Array
        (
             Array
                (
                    "day" => "5",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تشعر أنك في حالة جيدة الآن، فأنت مفعم بالحيوية والطاقة لأقصى حد. استغل فرصة أن النجوم تبتسم لك واسعى فيما تريد من الأمور، لأنك أين ذهبت وأين مددت يد المساعدة، فسوف تؤثر على الناس بمزاجك الجيد وقوتك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You feel good now, you're full of energy and energy. Take advantage of the opportunity that stars smile at you and seek what you want, because where you went and where you extended a helping hand, you will influence people with your good mood and your strength",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "لديك الآن الفرصة لكي تثبت كيفية تعاملك مع النجاح. قد ينال عملك النقد وسوف تضطر إلى إيجاد الردود الدفاعية الجيدة بدون انفعال عاطفي. في حياتك الخاص، قد ينتقدك بعض الأشخاص بحسن نية، ولكن يجب أن تتقبل ذلك لأنك لست كاملاً في نهاية الأمر.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "You now have the opportunity to demonstrate how you deal with success. Your work may get criticized and you will have to find good defensive responses without emotion. In your private life, some people may criticize you in good faith, but you must accept it because you are not perfect in the end.",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "تشعر بالحوية والقوة وبالتالي أنت قادر على العمل بفعالية، فإذا كنت تتطلع إلى المزيد من المسئوليات المهنية، الآن هو الوقت المناسب لإظهار إمكاناتك لأنه سيكون من السهل أن تحدد أهدافك دون أن تخلق أعداء. على العكس من ذلك، سوف يقدر زملاؤك أراءك ومفاهيمك وهذا من شأنه تبسيط الأمور لصالحك، وينطبق هذا أيضًا على المفاوضات، وسوف تتمكن من الأداء بقوة الآن.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "You feel power and strength and therefore you are able to work effectively. If you look forward to more professional responsibilities, now is the time to show your potential because it will be easy to set your goals without creating enemies. On the contrary, your colleagues will appreciate your opinions and concepts and this will simplify matters for you, and this also applies to negotiations, and you will be able to perform strongly now.",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "الآن وقتك! سوف تتعرض في العمل لسيل من التحديات والخطط الجديدة. إذا أبديت بعض الاهتمام بهذه التحديات والخطط، فسوف تكَوِّن أصدقاءً جدد. يلجأ إليك الناس أيضًا في حياتك الخاصة.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Now your time! You will be exposed to a series of new challenges and plans. If you show some interest in these challenges and plans, you will be new friends. People also turn to you in your own life.",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "تواجهك اليوم أفكار جديدة، وسوف تنجح إذا قابلت المخاطر بشجاعة. يمكنك الاعتماد على دعم زملائك في حالة نجاحك. كذلك يجب أن تُظْهِر بعض الصراحة في علاقتك.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You are facing new ideas today, and you will succeed if you meet the risks with courage. You can rely on the support of your colleagues if you succeed. You should also show some candor in your relationship.",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "تكوينك الجسماني في أفضل حالاته، وذلك يجب ترجمة هذا الإحساس بالحيوية إلى رغبة في العمل. يمكنك دائمًا الاعتماد على المثابرة وعندئذ لن تخاطر بإهلاك نفسك. إذا حددت أولوياتك بدقة وركزت أن لا تطلب الكثير، فسوف تكون على ما يرام.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Your physical composition is at its best, and you have to translate this feeling of vitality into a desire to work. You can always rely on perseverance and then you will not risk destroying yourself. If your priorities are accurately focused and that does not ask for much, you'll be fine.",

                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "يمكنك اليوم العمل بشكل بنّاء من خلال الفريق، وهذا يعني أنك سوف تستطيع تطبيق أصعب الأفكار اليوم. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today you can work constructively through the team, which means that you will be able to apply the most difficult ideas today.",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "لا يبدو أن الأشياء تسير بصورة جيدة اليوم، فلديك أيضًا مشكلة في التركيز على المهام اليومية. على الرغم من صعوبة تحفيز ذاتك، لا تخفض رأسك في يأس. إذا قمت بأفضل ما عندك فسوف تحصل على بعض النجاحات المحدودة، إلا أنه لا يجب أن تتوقع الكثير. عندما تستعيد هدوئك وتصبح أكثر ثقة، سوف تتحسن الأمور.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Things do not seem to be going well today. You also have a problem focusing on everyday tasks. Despite the difficulty of motivating your self, do not lower your head in despair. If you do your best you will get some limited successes, but you should not expect much. When you calm down and become more confident, things will get better.",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "هدوءك وثقتك يمنحاك مصدرًا طبيعيًا للحيوية، فأنت مفعم بالحيوية وحتى أصعب الظروف لن تمثل أية عواقب بالنسبة لك. تستطيع الانغماس في الحياة بدون تردد.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Your calmness and confidence give you a natural source of vitality, you are full of vitality and even the most difficult circumstances will not represent any consequences for you. You can indulge in life without hesitation.",
                ),

             Array
                (
                    "day" => "5",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "هناك تنبؤ بقدوم فترة اختبار هامة، فتعامل معها بتفاؤل وثق في إمكاناتك الذاتية.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "There is a prediction that an important test period will come, that you will deal with it with optimism and trust in your own potential.",

                ),

             Array
                (
                    "day" => "5",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اذا فشلت في شيء، فلا تشك في قدراتك، فمن المحتمل أن الظروف الخارجية لعبت دورًا في ذلك. اقتصد من طاقاتك قليلاً ودع الأمور تأخذ مجراها.  ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "If you fail something, do not doubt your abilities, it is possible that external circumstances have played a part in it. Save your energies a little and let things take their course.",

                ),

             Array
                (
                    "day" => "5",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "لا تسمح لخيبة أملك أن تمنعك من التقدم، وركز على ما هو آت، وحتى إن استغرق الأمر زمنًا أطول، فسوف تصل إلى هدفك بالإصرار والصبر.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Do not allow your disappointment to prevent you from progress, focus on what is coming, and even if it takes longer, you will reach your goal with determination and patience.",

                ),

        );
   $this->horoscope_data[5]= 

     Array
        (
             Array
                (
                    "day" => "6",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "لا تنسى أن شريك حياتك له احتياجات أيضًا، وكذلك أنت ولذلك أنت قلق. يبدو إنك قد نسيت كيف تهدئ من سرعتك وأن تأخذ الأمور ببساطة. تأكد من التركيز على ذلك خلال الأسابيع القليلة القادمة. يجب تأجيل أية استثمارات كبيرة والتعامل بحرص مع النقود.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Do not forget that your partner has his needs as well, so are you therefore anxious. You seem to have forgotten how to calm down and simply take things. Be sure to focus on this in the next few weeks. Any large investments should be put off and carefully handled with money.",
                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "يجب أن تتوخى الحذر دائمًا فيما يخص التأثير الخارجي السيء، ويفضل أن تفكر مرتين وأن تأخذ خطوة واحدة في المرة، ولا تسمح للآخرين باستثارتك بسهولة.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "You should always be careful about the bad external effect, and you should think twice and take one step at a time, and do not let others get you easily.",
                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " أنت تشعر بأنك بصحة وجيدة ولا تبدو أية مشكلات مالية في الأفق، ولذلك يمكنك التبذير بعض الشيء من حين لآخر.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "You feel healthy and well and there are no financial problems on the horizon, so you can waste a little bit of time.",
                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "سوف تكون معظم أفكارك مقبولة في الوقت الحالي بالنسبة للأغلبية وذلك لأن الآخرين يقبلون أفكارك بطبيعة الحال. استخدم نفوذك في تحقيق أهدافك، فإذا كانت أفكارك ومفاهيمك ثابتة وغير قابلة للتغيير، فسوف تجد القبول لدى الآخرين.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Most of your thoughts will be acceptable right now for the majority because others will naturally accept your ideas. Use your power to achieve your goals. If your ideas and concepts are constant and unchangeable, you will find acceptance in others.",
                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "يسهل الوثوق في كل ما تمت تجربته وإثباته، ولكن هكذا أيضًا تصدأ الأشياء. حاول اكتشاف مداخل جديدة لتحقيق النجاح. هؤلاء الذين يحيطون بك سوف يتفاعلون بإيجابية وسوف يعرضون المساعدة في حالة وجود بداية جديدة. تقبل هذه المساعدة بكياسة لأنه باستطاعتك تعلم الكثير من خبرات الآخرين.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => " It is easy to trust everything that has been tried and proven, but so too do things. Try to discover new entrances to success. Those around you will react positively and will offer help if there is a new beginning. This assistance is courteously accepted because you can learn a lot from others' experiences.",

                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => " انظر ما إذا كانت نصيحتك مطلوبة وكيف تستطيع تحفيز الآخرين، وهكذا سوف تحصل على تعاطف زملائك. عند التفاوض على شروط أفضل، ننصحك باختيار وظيفة الوسيط، فأنت تمتلك القدرة على عرض رأيك بطريقة لطيفة دون أن تضطر لمواجهة العقول المتصلبة. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "See if your advice is needed and how you can motivate others, and so you will get the sympathy of your colleagues. When negotiating better terms, we recommend that you choose a mediator's job. You have the ability to present your opinion in a nice way without having to face hardened minds.",

                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " سوف يتفاعل الأصدقاء معك بإيجابية، وسوف يقدرك الشركاء المحتملين وسوف يتأثرون بالطريقة البراقة التي تتعامل بها. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Friends will interact with you positively, and potential partners will inform you and will be affected by the brilliant way you deal with them.",
                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "من المحتمل ظهور أزمات عن قريب، فحاول أن لا تفقد مزاجك وأعصابك. اذا حافظت على رابطة جأشك، وواجهت الأحداث غير السارة والقلاقل التي تثيرها، فلن تدوم كثيرًا ولن تسبب خسائر مهمة. اعتني بصحتك. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "There may be crises nearby, so try not to lose your mood and nerves. If you maintain your bond and face unpleasant events and the troubles you provoke, you will not last long and will not cause significant losses. Take care.",

                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "تتمتع حاليًا بلياقة بدنية جيدة جدًا وإمكانيات ذهنية حادة، ويبدو أن كل شيء تشرع في القيام به سيكون لصالحك ولا شيء يقف أمامك. قـُم باستغلال وتوظيف هذه الطاقة في البدء بالعمل في مشروع جديد رغبت منذ زمن في الشروع به؛ فهذا هو الوقت الأمثل. اعتنِ بكل شيء ضروري لإنجاح مشروعك والأهداف التي تحارب من أجلها. يجب عليك التركيز فيما تحاول تحقيقه.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You currently enjoy very good physical fitness and sharp mental abilities, and everything that you start doing will seem to be in your favor and nothing stands in front of you. Take advantage of this energy and start working on a new project that you have long wanted to start. This is the perfect time. Take care of everything necessary for the success of your project and the goals you are fighting for. You have to focus on what you are trying to achieve.",

                ),

             Array
                (
                    "day" => "6",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => ". لا تتأثر بآراء الآخرين ولا تجعلها تحيدك عن معتقداتك وبدلاً من ذلك، استخدم هذه المواجهة لإيجاد ما يدعم الحجج المؤيدة لمواقفك. قد تكتشف فرصة أو فرصتين لتحسين الأمور.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Do not be influenced by the opinions of others and do not make them deviate from your beliefs. Instead, use this confrontation to find support for your arguments. You may discover a chance or two opportunities to improve things.",

                ),

             Array
                (
                    "day" => "6",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تمالك نفسك قبل أن تعادي الكل، فقط عليك معاملة الآخرين كما تحب أن يعاملوك. سوف يخلق ذلك جوًا خاليًا من التوتر. ملحوظة هامة: لا تهمل في نفسك، حتى وإن كنت لا تعاني من أية مشكلات صحية في الوقت الحالي، فإهمالك قد يسرع بها. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You own yourself before you are hostile to everyone, just treat others as you would like to be treated. This will create an atmosphere free of tension. Important note: Do not neglect yourself, even if you do not have any health problems at the moment, you may be rushed.",

                ),

             Array
                (
                    "day" => "6",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "الطاقة التي تجري في جسدك سوف تقودك إلى نجاحات عظيمة، ولكنها ستقودك أيضًا للمشكلات. فيما يخص التحديات، أنت تشعر بالتهديد بسهولة ولذلك تعمد إلى التصرف بعصبية وربما بعدوانية. لذلك، يجب أن تمنع نفسك من الخوض في هذه المواقف الملتهبة بالخلافات.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "The energy that takes place in your body will lead you to great successes, but it will also lead you to problems. With regard to challenges, you feel threatened easily and therefore deliberately act nervously and perhaps aggressively. Therefore, you must prevent yourself from going into these inflammatory situations.",

                ),

        );
    $this->horoscope_data[6]= 

     Array
        (
             Array
                (
                    "day" => "7",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "هدئ من سرعتك وانظر حولك بدلاً من التهور بصرف النظر عن العواقب. يستطيع زملاؤك ورؤساؤك إعطاءك النصائح والمساعدة التي سوف تساعدك في تحقيق أهدافك بشكل أسرع. يستطيع أصدقاؤك وأقاربك المساهمة في ذلك أيضًا.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Get off your pace and look around rather than reckless regardless of the consequences. Your colleagues and superiors can give you tips and help that will help you achieve your goals faster. Your friends and relatives can also contribute.",
                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "لا جدال في أنك مفعم بالقوة والحيوية في الوقت الحالي، فأنت مستعد أن تتحمل أي شيء وتريد أن تحسن من نفسك في العمل وفي حياتك الشخصية. لكن توخى الحذر، فطاقتك لن تمكنك دائمًا من التقدم. فأنت تميل إلى فقدان السيطرة في الخلافات وهذا قد يسبب المشكلات والتلفيات. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "There is no question that you are full of strength and vitality at the moment. You are ready to take on anything and want to improve yourself at work and in your personal life. But be careful, your team will not always be able to progress. You tend to lose control of the differences and this may cause problems and damage.",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "أنت تستمتع بالنجاح في كل مجالات الحياة في الوقت الحالي، فأنت تحقق الكثير من خلال ما تفعله وبسهولة، ولكن هذا الجانب الأخير قد يسبب لك بعض المشكلات. إذا أصبحت كسولاً، فسوف تفوتك بعض الفرص الجيدة في العمل وفي حياتك الخاصة، وسوف تتأثر الأخيرة أكثر لأنك الآن واسع الصدر وجذاب، والروابط التي تصنعها مع الآخرين ستكون دائمة .",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "You enjoy success in all areas of life at the moment, you do a lot of what you do easily, but this last aspect may cause you some problems. If you become lazy, you will miss some good opportunities at work and in your own life. The latter will be more affected because you are now broad-chested and attractive, and the links you make with others will be permanent.",
                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "سيكون لحيويتك المتزايدة وثقتك بنفسك المعدلة آثارًا إيجابية على اجتهادك أيضًا. إنه وقت جيد للبدء في مهام جديدة وذلك لأنك تستطيع الأداء بقوة بمفردك أو من خلال فريق عمل. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Your increased vitality and confident self-esteem will also have positive effects on your diligence. It's a good time to start new tasks because you can perform well on your own or through a team",
                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "من الأفضل التعامل مع هذا الفائض من الطاقة بحذر في الوقت الحالي، فقد تجد نفسك في خضم مناقشات أنت في غنى عنها إذا لم تتوخى الحذر. فبدلاً من إرهاق نفسك بصورة تنافسية زائدة، يستحسن أن تركز على المشروعات التي لن تؤدي إلى التضحية بمعروف قد تحتاج إليه في المستقبل. على سبيل المثال، الحملة التي قد تشنها على مديرك غالبًا ما سوف تكون مرهقة وحافلة بالتحديات، ولذلك، قد يكون من الأفضل ممارسة الأنشطة الرياضية. مرة أخرى، القاعدة الذهبية هي: الاعتدال!",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "It is better to deal with this surplus of energy cautiously at the moment, you may find yourself in the midst of discussions you need if you are not careful. Instead of overloading yourself with a competitive edge, it is advisable to focus on projects that will not sacrifice the good you may need in the future. For example, a campaign you might launch on your manager will often be stressful and challenging, so it may be better to do sports. Again, the golden rule is: moderation!",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "تقدم لك الحياة مستحقاتك. في العمل، أنت تظهر الكثير ممن الثقة بالنفس والكفاءة حتى إن المديرين يفكرون في ترقيتك فورًا. على الرغم من ذلك، فكر في ما إذا كنت تستطيع التعامل مع حمل أكبر من العمل. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Life gives you your entitlements. At work, you show a lot of self-confidence and efficiency so that managers are thinking about your promotion immediately. However, think about whether you can handle a larger load of work.",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "استعد لكل ما هو غير متوقع، فالمفاجآت السارة في انتظارك. فوق ذلك، شريك حياتك يحتفظ بشيء خاص لك، ولكن لا تجعل توقعاتك ترتفع أكثر من اللازم، وكن شكورًا على كل ما تتلقاه.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Prepare for everything that is unexpected, and the pleasant surprises await you. Above that, your partner keeps something special for you, but do not make your expectations go too high, and be thankful for everything you receive.",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "وحتى وإن شعرت إنك في أفضل أحوالك في الوقت الحالي، يجب أن تراعي صحتك. تذكر إنك تحتاج إلى الراحة من حين لآخر، فإذا تحملت فوق طاقتك الآن، فسوف يرتد ذلك في وجهك بشدة.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Even if you feel that you are in the best of your life right now, you must take into account your health. Remember that you need to rest from time to time, and if you are overstretched now, it will bounce back in your face.",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " في الوقت الحالي، أنت ضيف مرغوب فيه في كل مكان، ويسعى الآخرون لصحبتك الفعلية. فيما يخص الجسد: تحتاج الأنشطة الجسمانية في الوقت الحالي إلى مجهود أقل من الطبيعي، ولذلك حان وقت ارتداء حذاء الرياضة.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "At the moment, you are a desirable guest everywhere, and others are seeking your actual accompaniment. As for the body: Physical activities currently require less effort than normal, so it is time to wear sneakers.",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " فوق كل ذلك، يجب أن تحافظ على النظام فيما يخص صحتك، فأنت تميل للزيادة في كل مجالات حياتك. راقب نفسك بالكثير من الرعاية والاهتما",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Above all, you must maintain order in terms of your health, you tend to increase in all areas of your life. Watch yourself with a lot of care and care",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "هذا الأسبوع، أنت تركز بدرجة كبيرة على ذاتك، ولذلك فأنت تبدو للآخرين متطلبًا للغاية، وننصحك بالحذر. فالثقة في التعبير عن الرأي شيء، والتهور شيء آخر تمامًا. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "This week, you focus a lot on yourself, so you seem to others very demanding, and we advise you to be cautious. Confidence in the expression of opinion is nothing, and recklessness is quite another.",

                ),

             Array
                (
                    "day" => "7",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " فأنت لا ترغب في صنع الأعداء أو تحدي الآخرين أو استفزازهم. سيؤدي ذلك إلى تعريض صحتك للخطر، وهذا أبسط الأمور. خذ خطوة إلى الوراء من وقت لآخر، واستخدم طاقتك بطريقة هادفة ومدروسة. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "You do not want to make enemies or challenge others or provoke them. This will put your health at risk, which is the simplest thing. Take a step back from time to time, and use your energy in a deliberate and thoughtful way.",

                ),

        );
     $this->horoscope_data[7]= 

     Array
        (
             Array
                (
                    "day" => "8",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "إذا كانت الشكوك تساورك مؤخرًا ولا تستطيع الوصول إلى أية قرارات، تستطيع الآن رؤية الأشياء في ضوء أوضح. أنت تشعر بالتوازن الكافي الذي يمكنك من حصاد الخير كنتيجة لأي قرار تتخذه. أنت الآن قادر أيضًا على رؤية المشكلات من منظور مختلف وقد تجد حل وسط يقبله جميع الأطراف.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "If you have doubts lately and can not reach any decisions, you can now see things in clearer light. You feel the balance you can from harvesting the good as a result of any decision you make. You are now also able to see problems from a different perspective and you may find a compromise acceptable to all parties.",
                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => " تتسم حياتك الخاصة بعدد من النزاعات. لا تدع الأمر يصيبك بالإحباط، حتى وإن واجهت الأسوأ اليوم. انتظر قليلاً، لأن الحل يأتي من الداخل في بعض الأحيان. لا تقلل من أية أعراض جسدية قد تحس بها. ابحث عن السبب.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Your private life is characterized by a number of conflicts. Do not let it get you frustrated, even if you face the worst today. Wait a bit, because the solution comes from inside sometimes. Do not reduce any physical symptoms you may feel. Find the cause.",
                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "لا يوجد سبب يمنع الاحتفال بأفكارك والاستمتاع بوقتك، لكن لا تدع هذا يتحول إلى الوضع الطبيعي. أنت تشعر بالصحة في الوقت الحالي، لكن الكثير من الحياة الرغدة قد يؤذي صحتك.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "There is no reason why you should not celebrate your thoughts and enjoy your time, but do not let this become normal. You feel healthy right now, but a lot of good life can hurt your health.",
                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " ربما تتحمل مسئولية الكثير من العمل، وإن كان الأمر هكذا، فيجب أن تستريح من حين لآخر. لا يجب أن تفسد الأمور بالكثير من العمل أو أن تفسد صحتك وصدقاتك.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You may be responsible for a lot of work, and if so, you should rest from time to time. You should not spoil things with much work or spoil your health and your charity.",
                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "لديك اليد العليا مرة أخرى، وقد استعدت السيطرة وتستطيع الانتهاء من الأعمال في الوقت المطلوب بدون أي توتر وهذا يرضي الجميع. سوف تطلب منك المساعدة أكثر من ذي قبل وسوف تتلقى الشكر عليها أيضًا. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You have the upper hand again, the control has been prepared and you can finish the work at the desired time without any tension and this satisfies everyone. You will be asked for more help than before and you will receive thanks for it too.",

                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "في حياتك الشخصية ومع الشريك، تبدو الأمور جيدة. إذا كنت غير مرتبط فأنت لا تقاوم وتنال الكثير من العروض، ويبدو أن هناك فرصة جيدة لكي تبدأ علاقة مستقرة. يمكنك الإضافة إلى هذا الشعور الإيجابي لأنك تشعر بالرضا الداخلي والخارجي، وقد أسهمت في ذلك تدريبات اللياقة التي كنت تمارسها. تحقق مكاسب عملت جاهدًا للحصول عليها، ولكن لا تكن طماعًا. ",

                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "In your personal life and with your partner, things look good. If you are unlinked, you do not resist and get a lot of offers, and there seems to be a good chance to start a stable relationship. You can add to this positive feeling because you feel good at home and abroad, and this has contributed to your fitness training. Make gains you worked hard to get, but do not be greedy.",

                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " لقد حان وقت الاقتراب من المشروعات الجديدة والتخطيط الإستراتيجي للمستقبل، وبهذه الطريقة سوف توفر لمواجهة أوقات أصعب. تشعر أنك بصحة جيدة، فاستغل هذه الفرصة لتخزين بعض الطاقة. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "It is time to approach new projects and strategic planning for the future, and in this way it will provide for more difficult times. You feel good, so take advantage of this opportunity to store some energy.",

                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "أنت تغلي من الداخل، حرفيًا، فأنت تحمل الكثير من العدوانية داخلك والتي قد تنفجر من وقت لآخر. حاول أن لا تكثر من الكلام وبالتالي تجبر الآخرين على الدفاع عن نفسهم؛ على العكس، حاول إقناع زملائك بالصبر والدبلوماسية، فهذا سيكون أفضل من التكتيك القاسي.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "You boil from the inside, literally, you carry a lot of aggression inside you which may explode from time to time. Try not to talk too much and therefore force others to defend themselves; conversely, try to convince your colleagues of patience and diplomacy, this will be better than harsh tactics.",

                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "استمر كما أنت! فأنت تعلم ماذا تريد في الوقت الحالي، ويمكنك أيضًا التعبير عن ذلك بوضوح للآخرين، وأنت تقوم بذلك بطريقة ذكية جدًا ودبلوماسية. أنت تمهد الطريق لمسئوليات جديدة وربما ترقية، خاصة في مجال العمل، وكذلك في مجال العلاقات والحياة العاطفية، الأمور لا يمكن أن تكون أفضل.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Go on as you are! You know what you want right now, and you can also express it clearly to others, and you do so in a very smart and diplomatic way. You are paving the way for new responsibilities and perhaps promotion, especially in the field of work, as well as in the field of relationships and emotional life, things can not be better.",

                ),

             Array
                (
                    "day" => "8",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "تحتاج إلى ممارسة ضبط النفس هذا الأسبوع، فأنت تشعر بأن أعصابك مثارة عن عمد حتى من خلال أبسط التغيرات. قوتك الزائدة سوف تتحول ببساطة إلى نوبة من الغضب، وهذا لن يكون جيدًا لك. حتى وإن بدا الأمر صعبًا، يجب أن تحاول الوصول إلى حل وسط، فالصرامة سوف تتسبب بالتأكيد في المشكلات في حياتك الخاصة وفي العمل أيضًا.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "You need to exercise restraint this week. You feel your nerves are deliberately aroused even by the simplest changes. Your excess power will simply turn into a fit of anger, and this will not be good for you. Even if it seems difficult, you should try to reach a compromise. Strictness will certainly cause problems in your own life and work as well.",

                ),

             Array
                (
                    "day" => "8",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "ستغل هذه المرحلة الجديدة لتنتهي من الأمور المعلقة وتبدأ في أنشطة جديدة. لديك الكثير من الطاقة وهذا سيمكنك من تنفيذ بعض الأهداف. تأكد من استخدام نقاط القوة لديك بكفاءة",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "This new phase will be put to an end and things will begin. You have a lot of energy and this will enable you to accomplish some goals. Be sure to use your strengths efficiently",

                ),

             Array
                (
                    "day" => "8",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "لا يمكن التغلب على العقبات التي تراها أمامك في الوقت الحالي إذا حاولت حلها بالطرق القديمة المعروفة. يجب أن تغيِّر مدخلك والتوصل إلى استراتيجية جديدة وأن لا تسمح للآخرين بتغيير رأيك أو خططك كثيرًا. يكمن الحل بداخلك، فببعض الثقة بالنفس تستطيع التغلب على هذه المشكلات والإمساك بزمام الأمور مرة أخرى. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "You can not overcome the obstacles you see in front of you at the moment if you try to solve the old known methods. You must change your income and come up with a new strategy and do not let others change your mind or plans much. The solution lies within you, with some self-confidence you can overcome these problems and take control again.",

                ),

        );
      $this->horoscope_data[8]= 

     Array
        (
             Array
                (
                    "day" => "9",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " إذا لم يكن هناك أحد في الصورة، ربما حان الوقت للبحث عن حبك الحقيقي. لقد انتهى وقت الكسل والتردد – فطاقتك لا تعرف الحدود.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "If there is no one in the picture, maybe it's time to look for your true love. The time of laziness and hesitation has ended - your team knows no boundaries.",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "الأمر يزداد صعوبة في العمل، لذلك يجب أن تقبل عروض المساعدة من زملائك حتى يقل جبل العمل الذي يقبع أمامك تدريجيًا إلى أن يصبح مهامًا يمكن التعامل معها.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "It's getting harder to work, so you have to accept the offers of help from your colleagues so that the mountain of work in front of you is gradually reduced to become tasks you can handle.",
                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم يمكنك تحفيز من هم حولك، ولكن لا تهمل احتياجاتك الخاصة لأن أهدافك الآن أصبحت أوضح عن ذي قبل. أسلوبك النشط معدي لمن هم حولك ويلحظه الآخرون. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today you can motivate those around you, but do not neglect your own needs because your goals are now clearer than before. Your active style is intended for those around you and others.",
                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "لا يفيد هذا الغرور الخارج عن السيطرة مع عادتك الحالية في الإسراف في الحفاظ على الصداقات في الوقت الحالي، والواقع أنه ربما ينتهي بك الأمر بمشكلات مالية أيضًا. سوف يكون لهذا السلوك المتهور عواقب سلبية على أموالك التي تعبت في الحصول عليها. من الأفضل أن تكون ملتزمًا وأن تتجنب الخيال غير الواقعي، ولذلك يجب أن تنتقد ذاتك وأن تأخذ الوقت الكافي لكي تستمع إلى صوتك الداخلي.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "This out-of-control vanity is not helpful with your current practice of being extravagant in maintaining friendships at the moment, and in fact you may end up with financial problems as well. This reckless behavior will have negative consequences for your hard-earned money. It is better to be committed and avoid unrealistic fiction, so you should criticize yourself and take the time to listen to your inner voice.",
                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " أصبحت تواجه نفسك أكثر، ولذلك حاول إسراع هذه العملية من خلال التأمل. تعامل مع النقود بحرص ولا تغتر بالمكاسب السهلة.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You are facing yourself more, so try to speed up this process through meditation. Treat money with care and do not be tempted by easy gains.",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "ستصبح صدقاتك أكثر عمقًا وسوف تسترجع مع أصدقائك أحداث وذكريات ماضية لا تنسى. في وسط المجموعات التي تنتمي إليها بالأخص، سوف تتشابك سلسلة إجراءات جماعية حيوية وإيجابية جدًا وسوف تقودك بسرعة مذهلة إلى هدفك. يجب أن تتقبل كل فرد على ما هو عليه ودع الطاقة تسري ! ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Your charity will become deeper and will bring back unforgettable memories of your friends. In the midst of the groups to which you belong, in particular, a series of vital and very positive group actions will be intertwined and will lead you astounding speed to your goal. Every person should accept what he is and let the energy flow!",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "أنت في وضع مريح ومتوازن وسوف يفيدك ذلك على المستويين الشخصي والمهني، فأنت لست بحاجة إلى أن تكون مقنعًا لكي تلهم الآخرين بأفكارك وخططك. فحتى رؤساؤك وزملاؤك والذي يصعب التعامل معهم سوف يكونوا على استعداد لسماع مقترحاتك.. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You are in a comfortable and balanced position that will benefit you both personally and professionally. You do not need to be convincing to inspire others with your thoughts and plans. Even your bosses and colleagues, who are difficult to deal with, will be willing to hear your suggestions.",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " أنت متسامح تجاه أخطاء الآخرين، ولذا لا يمكن أن يجادلك أحد الآن، والواقع أن بعض الأشخاص غير العادية حولك تجدك مثيرًا. خذ بعض الوقت لنفسك واغرق في أفكارك. قم ببعض الاستثمارات، فسوف تؤتي ثمارها. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "You are tolerant of others' mistakes, so no one can deal with you now, and some unusual people around you find you exciting. Take some time for yourself and drown in your thoughts. Make some investments, you will pay off.",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " رضاؤك الداخلي يجعلك لا تهتم كثيرًا بالرياضة لأنك تشعر بأنك بصحة جيدة دون ممارسة أية رياضة. حاول أن تضع الأمور في مجموعات، ومن ثم سوف تسير الأمور بشكل أسهل. ادرس الاستثمارات لما لها من استخدام طويل الأجل وللأما",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Your inner satisfaction makes you not much interested in sports because you feel healthy without exercising. Try to put things in groups, and then things will go easier. Investigate investments because of their long-term use",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " في حياتك الخاصة، أنت حساس جدًا وتميل إلى المبالغة لأنك تشعر بأنك ضحية. قد يكون من المفيد أن تقوم ببعض الرياضة للتخلص من هذا التوتر، ولكن لا تحاول أن تفعل الكثير حتى لا تؤذي نفسك. فيما يخص الأمور المالية، أنت تبالغ في تقدير إمكانياتك وقد تخاطر بخسارة الكثير. توخى الحذر وارجع لرشدك. ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "In your own life, you are very sensitive and tend to exaggerate because you feel you are a victim. It may be helpful to do some sport to get rid of this tension, but do not try to do too much so do not hurt yourself. As far as finances are concerned, you overestimate your potential and risk losing a lot. Be careful and go back to guide you.",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "ا فالمزيج المكون من الطاقة الصافية والرغبة في استكشاف أفق جديدة ما هو إلا دعوة لتحقيق أحلام قلبك، وقد يشمل ذلك رحلة طويلة ومثيرة، ولأنك تميل إلى التكاسل، احذر من عدم الاستفادة من هذه المرحلة الإيجابية. الحظ حليفك فيما يخص الأمور المالية، ولكن لا تجعل الثقة الزائدة تؤثر عليك. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "A combination of pure energy and the desire to explore a new horizon is only a call to realize your heart's dreams. This may involve a long and exciting journey, and because you tend to be lazy, be careful not to take advantage of this positive phase. Note your financial ally, but do not make the excess trust affect you.",

                ),

             Array
                (
                    "day" => "9",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " سوف تتخذ قرارات قريبًا في حياتك الخاصة. التزم برأيك، ولكن استمع أيضًا إلى ما يقوله الآخرون من حولك. تظهر هذه الظروف الصعبة أيضًا في شكل جسدي. خذ وقتك للاستمتاع بالمزيد من السلام والهدوء",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Decisions will soon be made in your own life. Observe your opinion, but listen to what others are saying about you. These difficult conditions also appear in physical form. Take your time to enjoy more peace and quiet",

                ),

        );
       $this->horoscope_data[9]= 

     Array
        (
             Array
                (
                    "day" => "10",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "أنت ناجح في العمل – حتى وإن لم يلاحظ أحد ذلك أو يظهر لك التقدير. سوف يفيدك أن تظل مستعدًا لمساعدة ودعم الآخرين. يريد أحباؤك دعمك أيضًا في الوقت الحالي.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You are successful at work - even if no one notices or appreciates you. It will help you stay ready to help and support others. Your loved ones also want your support right now.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "في الوقت الحالي، يبدو أن حجم المشكلات في تزايد، ولكن يجب أن لا تطغى المشكلات عليك. فقط عندما تواجه مشكلة واحدة تلو الأخرى سوف تبدأ في الشعور بالسعادة مرة أخرى. من الضروري أن تتصرف في الحال، وإلا فسوف تواجه تعقيدات أكثر. لا تخف من قبول المساعدة من الآخرين في حالة عرضها. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "At the moment, the volume of problems seems to be increasing, but the problems should not overwhelm you. Only when you encounter one problem after another will you start to feel happy again. It is necessary to act immediately, otherwise you will face more complications. Do not be afraid to accept help from others if you view them.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "لديك الآن قدرة التعامل بدقة وحكمة مع جميع المواقف التي تواجهها وتتعرض لها، فتأكد من استغلالك لها بقدر الإمكان!",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "You now have the ability to deal accurately and wisely with all the situations you face and are exposed to, so be sure to use them as much as possible!",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "في الوقت الحالي، أنت تعمل بصورة جيدة من خلال الفريق، وأنت مستمتع بذلك أيضًا. حافظ على بيئة العمل الخلّاقة هذه لأن كلً منكم سوف يحقق أهدافه الشخصية أسرع إذا تكاتفتم معًا. حتى في حياتك الشخصية فسوف تشعر أكثر بالراحة في مجموعة عما إذا كنت وحدك. قد يساعدك هذا الشعور في التقدم في حياتك العاطفية والاستمتاع ببعض الرومانسية.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Right now, you're doing well through the team, and you're also enjoying it. Keep this creative work environment because each of you will achieve your personal goals faster if you come together. Even in your personal life you will feel more comfortable in a group than if you are alone. This feeling can help you progress in your emotional life and enjoy some romance.",
                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "أنت الآن قادر على التعبير عن مشاعرك بوضوح أكثر في حياتك العاطفية، ولديك الشجاعة الكافية لكي تعترف بأخطائك. إذا كنت تمتلك الشجاعة لكي تتحدث مع الآخرين، سوف تنال الإعجاب وتحصل على مردود أكثر مما كنت تتوقع.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You are now able to express your feelings more clearly in your emotional life, and you have the courage to admit your mistakes. If you have the courage to talk to others, you will get admiration and get more reward than you expected.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => " اغتنم فرصة كونك مفعم بالصحة والحيوية وخلو ذهنك، وقم في المرتبة الأولى بإنجاز الأعمال الخاصة بالفريق. الآن أيضًا تجري المشاركات الخاصة بطريقة متناغمة وثمرة. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Take the opportunity to be healthy, energetic and free of mind, and take first place in the work of the team. Now also private posts are conducted in a harmonious and fruitful manner.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " قد تكتشف هواية جديدة أو اهتمامات مشتركة مع الشريك. الأمور وردية فيما يخص الصحة والمال، فلا يمكن أن تخسر. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You may discover a new hobby or shared interests with your partner. Things are rosy about health and money, you can not lose.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "إذا ارتكبت أخطاء الآن، سوف ينظر الآخرون في الاتجاه الآخر عن طيب خاطر، أو سيؤكد المشترى حدوث نتائج إيجابية. الأمور تسير بشكل جيد في العمل، ولكن يجب أن تتوخى الحذر بعض الشيء، وإلا فسوف يتضاءل تأثير المشترى مرة أخرى.  ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "If mistakes are made now, others will look in the other direction willingly, or the buyer will confirm positive results. Things are going well at work, but you have to be a bit cautious, otherwise the buyer's effect will diminish again.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "لا شيء يستطيع إزعاجك، فكل شيء يسير على ما يرام في العمل، وأنت ناجح جدًا في الوقت الحالي. لن تصل مباشرة إلى الترقية التالية ولكنك ستصل إلى هدفك خطوة بخطوة. في حياتك الخاصة أيضًا، من المهم الشعور بالتناغم: أنت متفهم وصبور، حتى مع الأشخاص الأكثر تطلبًا.  ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Nothing can bother you, everything is going well at work, and you're very successful right now. You will not reach the next upgrade directly, but you will reach your goal step by step. In your own life too, it is important to feel in tune: you are understanding and patient, even with the most demanding people.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "الآن أنت في خطر أن تضطر إلى إثبات شيء ما أمام الكل، والآخرون لا يحبون سلوكك. قد تستطيع تخطي الصعوبات في العمل، ولكن إحساسك المبالغ في الحاجة إلى الإعجاب يجعل الآخرون يغارون منك. ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Now you are in danger of having to prove something to everyone, and others do not like your behavior. You may be able to overcome difficulties in work, but your sense of money in the need to admire makes others jealous of you.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اليوم أنت مفعم بالحيوية، على الرغم من أن هذا يرهقك بدلاً من أن يدفعك إلى الأمام. نظرًا لقلقك الداخلي، يصبح من السهل استثارتك وأنت الآن تفضل أن تخبط رأسك في الحائط. إذا كنت لا تستطيع كبت هذا الاندفاع، فقد تجد أنك تتجادل مع الجميع اليوم. حاول أن تتحمل الضغوط الداخلية حتى تمر هذه المرحلة. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today you are full of vitality, although this is exhausting rather than pushing you forward. Due to your internal anxiety, it is easy to get excited and now you prefer to flop your head in the wall. If you can not suppress this rush, you may find that you are arguing with everyone today. Try to withstand internal pressures until this stage passes.",

                ),

             Array
                (
                    "day" => "10",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "في بعض الأحيان، يجب أن تتعامل مع الفشل في العمل. كن شجاعًا وانظر إلى هذه الانتكاسات على إنها فرص للتغيير إلى الأحسن. إذا قمت بذلك، فسوف تخرج من أعماق اليأس في حالة أفضل.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Sometimes, you must deal with failures at work. Be brave and look at these setbacks as opportunities for change to the best. If you do, you'll go out of the depths of despair in a better state.",

                ),

        );
        $this->horoscope_data[10]= 

     Array
        (
             Array
                (
                    "day" => "11",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " في حياتك الشخصية تستطيع الاستمتاع بأوقات سعيدة نتيجة للانطباع الجيد الذي تتركه على كل من تقابلهم. استمتع بهذه المرحلة من الإنجاز السهل والنجاح قبل أن تنتهي. ",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "In your personal life you can enjoy happy times because of the good impression you leave on everyone you meet. Enjoy this stage of easy accomplishment and success before you finish.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => " في حياتك الخاصة، أنت بحاجة إلى دافع جديد، فأنت تشعر أن العلاقات مع من حولك تفقد رونقها. اكسر قيود الروتين وافعل شيئًا غير تقليدي. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "In your own life, you need a new motivation, you feel that relationships with those around you lose their luster. Break the limitations of routine and do something funky.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "أنت مفعم بالحيوية والنشاط البدني والذهني؛ استخدم إمكاناتك في اتخاذ القرار السليم لتنفيذ مخططاتك والتقدم إلى الأمام في مشروعاتك. لن يفيدك الاكتفاء بالأمجاد الماضية والسلبية! ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "You are full of vitality and physical and mental activity; use your potential to make the right decision to implement your plans and move forward with your projects. It will not be useful for you to suffice with past and negative glories!",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "حاليًا، أنت قادر على الاندماج بكل سهولة ضمن فريق، دون نزاع، وتسود الأجواء تناغم وتوافق من حولك. بإمكانك الاستفادة من هذا التأثير الإيجابي في نشاطات ترفيهية مذهلة أو في العمل لدفع الأمور وتكون فرد منتج. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Currently, you are able to easily integrate into a team, without conflict, and the atmosphere prevails in harmony and consensus around you. You can take advantage of this positive impact in amazing recreational activities or at work to push things and be a productive individual.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "هناك حلم تضمره في انتظار تحوله إلى حقيقة ملموسة. انتهز الفرصة لتحقيق الحلم الذي سيغير من مسار حياتك بشكل إيجابي ولفترة طويلة. سيكون لأقاربك وأصدقائك رد فعل إيجابي تجاه التغيير الذي تسعى إليه وسوف يساندونك على طول الخط. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "There is a dream that is waiting for it to become a reality. Take the opportunity to achieve a dream that will change the course of your life positively and for a long time. Your relatives and friends will have a positive reaction to the change you are seeking and will support you along the line.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "يتبين حاليًا أن جميع أشكال التعاون فعَّالة لأن أهدافك تتوافق وتتزامن مع أهداف من حولك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "It is now clear that all forms of cooperation are effective because your goals coincide with those around you.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " تقترب من الناس بصورة أكثر انفتاحًا وصداقة وهذا يعجلهم يحبونك في الحال، وهذا سوف يؤدي إلى ظهور الكثير من المعارف الجديدة وربما شريك حياة جديد إذا كنت غير مرتبط.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You approach people more openly and friendship and this speeds them to love you right away, and this will lead to the emergence of a lot of new knowledge and perhaps a new life partner if you are unconnected.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "دافع عن خططك وامض إلى الأمام، أو حاول تكييف أفكارك بحيث تتماشى مع الظروف الحالية. إي من الخيارين سوف يظهر ما إذا كان هدفك واقعي ويستحق عناء الوصول إليه. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Defend your plans Flashing forward, or try to adapt your thoughts to fit current circumstances. Either option will show whether your goal is realistic and worth the trouble of reaching it.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " أنت مفعم بالحيوية، فاستمتع بوقتك – اخرج أو اكتشف أماكن جديدة. اطلب من الأصدقاء الانضمام إليك – وسف يؤدي هذا إلى رفع روحك المعنوية. في المجمل، أنت تشعر بالقيادة والهدوء؛ استغل هذا في الحفاظ على مستوى صحتك الممتاز",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You are lively, enjoy your time - go out or explore new places. Ask friends to join you - and this will raise your spirits. All in all, you feel calm and calm; take advantage of this to maintain your excellent health",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "حياتك الخاصة متقلبة بشدة في الوقت الحالي. يجب أن تتعامل مع التقلبات غير المتوقعة بهدوء. تحتاج إلى استرخاء أكثر. خذ استراحة بعيدًا عن مسئولياتك واستمتع ببعض الوقت الخاص بك. اقرأ كتابًا جيدًا أو استمتع بحمام مريح. ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Your life is very volatile right now. You must deal with unexpected fluctuations quietly. You need to relax more. Take a break away from your responsibilities and enjoy your time. Read a good book or enjoy a comfortable bath.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " يجب أن تقبل وجود النقيضَين وحاول التوفيق بينهما. هكذا سوف تظهر لمن هم حولك كشخص أفضل.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You must accept the existence of the two extremes and try to reconcile them. This will show those around you as a better person.",

                ),

             Array
                (
                    "day" => "11",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "سوف تقابلك التحديات بصورة متكررة بشكل غير عادي اليوم، مسببة لك الكثير من الضغوط.  يجب أيضًا أن تفكر في صحتك، لأنه على المدى الطويل لن يعود عليك بالفائدة أن تستهلك كل قوتك في مدة زمنية قصيرة.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Challenges will meet you extraordinarily frequently today, causing you a lot of stress. You should also think about your health, because in the long run it will not be worth your while to consume all your strength in a short period of time.",

                ),

        );
         $this->horoscope_data[11]= 

     Array
        (
             Array
                (
                    "day" => "12",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "الأمور اليوم تقع في مكانها السليم، فمن حولك لا يستطيعون تجاهل حماسك وحيويتك. في العمل أنت تنجز كل ما تحتاج إليه، ويكون باستطاعتك تمرير الكثير من الأفكار الجديدة. ",

                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Things are in place today, those around you can not ignore your enthusiasm and vitality. At work you do everything you need, and you can pass a lot of new ideas.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "يجب أن تستعد لمواجهة مشكلات جديدة، فالأمور ليست جيدة في مكان العمل وأنت لا تستطيع إنجاز سوى القليل. لا تجعل ذلك يخيفك، فهذه المراحل تجيء ثم تذهب. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "You have to prepare for new problems. Things are not good at work and you can do little. Do not make it frighten you, these stages come and go.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "الأشخاص في محيط العمل يتعاملون بإيجابية خاصة معك؛ فانتفع من هذه الفترة لمواجهة المشاكل الصعبة مع فريقك وبالتالي الاقتراب أكثر من هدفك. سوف تساعد الديناميكية التي تنمو بين الفريق على الوقوف بصلابة أمام أصعب التحديات والوصول معًاً إلى النجاح. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "People in the working environment deal positively with you; you can benefit from this period to face the difficult problems with your team and thus get closer to your goal. The dynamics that grow between the team will help to stand firm against the most difficult challenges and come together to succeed.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "حماسك يمكنك من العمل بنجاح من خلال فريق، كما يمكنك ترك علامتك بهدوء إذا قمت بإنجاز المهام مع الآخرين. لكن تذكر أن نجاح المجموعة هو الأهم – وليس الأنا الخاصة بك. سوف ينتج عن ذلك أيضًا مناخًا جيدًا في المنزل. قد يؤدي السلوك الأناني إلى الإضرار بعلاقاتك الأسرية على المدى البعيد. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Your enthusiasm enables you to work successfully through a team, and you can leave your mark quietly if you accomplish tasks with others. But remember that group success is more important - not your ego. This will also result in a good atmosphere at home. Selfish behavior can damage your family relationships in the long term.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "أما فيما يتعلق بالصحة، فيمكنك تحديد المسار المستقبلي بإيجابية. إذا اقتربت من الأشياء بشيء من الصبر والعناية، يمكنك التخلي عن بعض السلوكيات غير الصحية على المدى الطويل. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "With regard to health, you can determine the future path positively. If you approach things with some patience and care, you can give up some unhealthy behaviors in the long term.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => " ترتفع فرص حل نزاع ما بين الأسرة أو الأصدقاء للأبد. سوف تمر بساعات لا تُنسى من التناغم والتضامن، وهذا قد يلطف الأوقات الصعبة. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "The chances of resolving a family or friends dispute forever rise. Will go through unforgettable hours of harmony and solidarity, and this may soften the difficult times.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "تشعر بشيءٍ ما داخلك يدفعك إلى الأمام. في العمل، قد تشعر بقلة العمل ولذلك يجب أن تقبل مهامًا جديدة أو ربما يجب أن تأخذ دورة تدريبية. سوف يلاحظ الآخرون رغبتك في التقدم وسوف يقدمون لك بعض المساعدة.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Feel something inside you pushing you forward. At work, you may feel a lack of work and therefore you should accept new tasks or perhaps you should take a training course. Others will notice that you want to apply and will give you some help.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "طريقك يزداد صعوبة أكثر مما تصورت في بادئ الأمر، وربما هناك شخص يحاول إثنائك عن خطتك أو حتى إحباطك. لا تيأس – انظر إلى الأمر كأنه عقبة واختبر إرادتك. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Your way is getting harder than you thought at first, and maybe someone is trying to divert you from your plan or even frustrate you. Do not despair - look at it as an obstacle and test your will.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "أنت ناجح في كل ما يخص العمل، والقرارات الهامة التي اتخذتها أثبتت صحتها. لكن يجب أن تأخذ الوقت الذي تحتاجه دائمًا عند التفكير في المشروعات.. ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You are successful in everything related to the work, and the important decisions you have taken have been proven correct. But you should take the time you always need when thinking about projects.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "يبدو وكأنك تقف أمام مشكلات لا يمكن التغلب عليها، فلا تيأس! فقط عليك تغيير منظورك للأشياء وعندئذ سوف تبدو الحلول واضحة. لا تخف من طلب النصيحة! ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "It seems like you are facing insurmountable problems, do not despair! Just change your perspective on things and then the solutions will look clear. Do not be afraid to ask for advice!",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "بما أنك قد بذلت طاقتك بتهور وعشوائية في الوقت الحالي، أدى ذلك إلى ظهور الخلافات بدلاً من النجاح. لكن، يجب أن تكون على دراية بنقاط القوة ونقاط الضعف الخاصة بك وأن لا تحاول أن تلعب بواحدة ضد الأخرى. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Since you have already exerted your energy recklessly and indiscriminately, this has led to differences rather than success. However, you should be aware of your strengths and weaknesses and not try to play against each other.",

                ),

             Array
                (
                    "day" => "12",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " ربما يجب أن تبتعد عن الطريق أحيانًا بدلاً من تحمل مسئولية كل شيء. سوف يساعك هذا على توفير طاقتك للأشياء الهامة بحق، خاصة في العمل. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Maybe you should get away from the road sometimes instead of taking responsibility for everything. This will help you save your energy for really important things, especially at work.",

                ),

        );
          $this->horoscope_data[12]= 

     Array
        (
             Array
                (
                    "day" => "13",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " لكونك تتمتع بالحيوية أكثر، فبإمكانك القيام بكل ما ترغب فعله. مع ذلك، عليك أن تتساءل كيف سيكون الوضع بالنسبة لك اذا صارت الأمور أصعب من الآن.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "As you are more energetic, you can do whatever you want to do. However, you have to wonder how it will be for you if things get harder now.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "إن العراقيل التي تنبأت بقدومها منذ فترة طويلة تظهر تدريجيًا وتتحول إلى واقع، وبات تفاديها مستحيلاً. واجه تلك التحديات في أسرع وقت، حتى وإن كانت المهمة صعبة. كلما تأخرت في ذلك، تراكمت العراقيل ووجب عليك مضاعفة المجهود لتجاوزها. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "The obstacles that have been foreseen for a long time are gradually emerging and becoming reality, and their avoidance is impossible. Meet those challenges as quickly as possible, even if the task is difficult. The longer you do, the more obstacles you have to overcome.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " اليوم أوضاعك العملية مستقرة، حاول أن تستفيد من هذا الهدوء، وقم بطرح أفكار مشاريعك.. اليوم تعمل لراحة الحبيب، وتغمره بالحنان الذي يستحق، ومن جهته يبادلك بأصدق المشاعر.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today your situation is stable, try to take advantage of this calm, and put your ideas for your projects .. Today works for the comfort of the beloved, and immersed in the tenderness that deserves, and for his part, the most sincere feelings.",
                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "حالتك البدنية والذهنية في أحسن حال، لذا لديك تأثير إيجابي كبير على الآخرين الذين يلاحظون مدى إيجابيتك ولمعانك بكامل ثقة. سوف تنفـُذ الحماسة التي تغمرك وتتخلل كل من تتعامل معه وتؤثر فيه، فتجدهم خير عون ومساعد لك في تنفيذ وتحقيق أهدافك التي ظننت أنها لن تتحقق. انتفع من تلك الطاقة الصادرة منك قبل أن يفوت الوقت ويمر دون ذلك. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Your physical and mental state is at best, so you have a very positive impact on others who notice your positive and your full confidence. You will implement the enthusiasm that engulfs you and permeates everyone you deal with and influence. You will find them helpful and helpful in implementing and achieving your goals that I thought will not be achieved. Benefit from that energy before you lose time and pass without it.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "سوف تواجه اليوم مشكلات جديدة في العمل، إلا إنك سوف تتلقى دعمًا في الوقت المناسب بحيث يمكنك الاستمرار في عملك بهدوء. لا ترفض هذا الدعم وإن جاءك من مصادر غير عادية. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You will face new business problems today, except you will receive timely support so that you can continue to work quietly. Do not reject this support if it comes from unusual sources.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "بما أنك شخص اجتماعي بحق، وبما أنك ربما قد تكون قد أهملت واحد أو اثنين من معارفك مؤخرًا، يجب عليك الآن إصلاح هذه العلاقات مرة أخرى ومعاودة التواصل.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Since you are a real social person, and since you may have already neglected one or two of your acquaintances recently, you should now fix these relationships again and reconnect.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "تجد سهولة في التعامل الإيجابي مع الأشخاص في الوقت الحالي، فالكل يبدو منجذبًا إليك، كما أن الصلات التي قد يكون لها تأثيرًا إيجابيًا على مستقبلك تظهر في كل مكان. تأكد من أنك تُقَدِر هؤلاء الأشخاص حق تقديرهم وذلك للفوائد التي تأتي من خلالهم وكذلك لقيمتهم الشخصية. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You find it easy to deal with people right now, everyone seems attracted to you, and the connections that may have a positive impact on your future are everywhere. Make sure you appreciate these people for the benefits that come from them as well as their personal value.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "إذا جرت الأمور على غير المتوقع، قد تكون النتائج في نهاية المطاف إيجابية كغير المتوقع. كل تجربة تمر بها تجعل من مسار حياتك ممتع ومفيد. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "If things happen unexpectedly, the results may ultimately be as positive as expected. Every experience you go through makes your life path enjoyable and useful.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "انتهز فرصة عدم وجود أي هموم وانشغالات لديك وأقضِ الوقت مع أصدقائك وعائلتك، فستشعر بأن الروابط بينك وبينهم تقوى. ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Take the opportunity to have no worries and preoccupations and spend time with your friends and family. You will feel that the bonds between you and them strengthen.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "توقفت الأشياء دون سبب واضح، وعلى الرغم من أنك لم ترغب في تغيير المسار وأردت أن تلتزم بالجدول الموضوع، يجب الآن أن تأخذ مسار تحويلي مختلف لتجنب العقبات وحتى لا تهدر كل طاقتك في محاولة التغلب عليها. قد تستغرق وقتًا أطول في الوصول إلى هدفك، ولكنك قد تكسب المزيد من الخبرات القيمة أثناء ذلك. ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Things stopped for no apparent reason, and although you did not want to change course and wanted to stick to the subject table, you should now take a different transformational path to avoid obstacles so as not to waste all your energy trying to overcome them. It may take longer to reach your goal, but you may gain more valuable experiences during that time.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "فالإثارة الزائدة الآن ضارة بصحتك في جميع الأحوال، وأنت ذاتك أيضًا بحاجة إلى العواطف والتقدير. دع ضغوط الحياة اليومية خلفك، فالراحة سوف تعيد شحن مخزونك من الطاقة. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Excessive excitement is harmful to your health at all times, and you yourself also need emotions and appreciation. Let the stress of everyday life behind you, rest will recharge your stock of energy.",

                ),

             Array
                (
                    "day" => "13",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم لديك فرصة مهنية واهتمامات كثيرة تتعلق بالعمل.. اليوم قد تتأزم الأوضاع فلا تُجازف باستمرار العلاقة.. اليوم حاول أن تجلس على شاطئ البحر عند المغيب، حتى تريح أعصابك، وتشعر بالهدوء.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today you have a career opportunity and many interests related to work .. Today may be strained situations do not risk the continuation of the relationship .. Today tried to sit on the beach at sunset, so that you relax your nerves, and feel calm.",

                ),

        );
           $this->horoscope_data[13]= 

     Array
        (
             Array
                (
                    "day" => "14",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تعيش فترة توازن بدني وذهني متناغم ولا ظهور لأي عائق خارجي في الأفق أيضًا، بل على النقيض، غالبية محيطك ودي معك وخدوم وحياتك تسير بأفضل حال.. ",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "There is a harmonious balance of mind and physical balance, and there is no external obstacle on the horizon. On the contrary, the majority of your surroundings are friendly with you and your life is going well.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => " اليوم كن متحفظًا، ولا تعطي ثقة غير مبنية على أرض صلبة.. اليوم ربما تفكّر ببيع، وربما تتلقى عرضًا أو توسع عملاً يتعلّق بشأن منزلي.. اليوم قد تشعر بالتوتر، ولا تعرف كيف تتعامل مع تصرفات الآخرين.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today you may be thinking about selling, maybe you will receive an offer or expand work related to my home. Today you may feel nervous and do not know how to deal with the actions of others.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم أنت قادر على إيجاد أساليب جديدة في العمل، ويساعدك ذلك على زيادة دخلك، وتكسب ثقة الآخرين.. اليوم لا تجعل الأمور تتراكم بينك وبين الحبيب، وحاول وضع النقاط على الحروف.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today you are able to find new ways to work, and help you to increase your income, and win the trust of others .. Today do not make things accumulate between you and the beloved, and tried to put points on the letters.",
                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " اليوم هناك استثمارات وأموال، وبعض المفاجآت السارّة.. اليوم ربما تعبّر عن رغباتك أمام بعض المراجع النافذة، وتتلقى أجوبة مناسبة.. اليوم تحقق خطوة مهمة في علاقتك العاطفية.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today there are investments and money, and some good surprises .. Today may reflect your wishes in front of some references in the window, and receive the appropriate answers .. Today achieved an important step in your relationship emotional.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " لا ترتاب فيهم بعد الآن وتقبل أية مساعدة يعرضونها عليك، وحاول أيضًا أن تكون منفتحًا تجاه أفكار الآخرين وربما تستطيع دمج هذه الأفكار في خططك الخاصة. سوف يدفعك هذا أكثر إلى الأمام.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Do not worry about them anymore and accept any help they offer you. Also try to be open to others' ideas and maybe you can incorporate these ideas into your own plans. This will push you further forward.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "اليوم تتأمل وتفكر بإعادة النظر أو الانسحاب من بعض الأماكن الخطرة أو الانتماءات الدقيقة.. اليوم ركز اهتمامك على الحبيب، وحاول أن تجعله يشعر بالراحة والأمان، وأفصح له عن مكنونات قلبك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today meditate and think about reconsidering or withdrawing from some dangerous places or delicate affiliations. Today focus your attention on the beloved, and try to make him feel comfortable and safe, and tell him about the devices of your heart.",
                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "أصبحت يومياتك سارة ومبهجة في طبيعتها حيث أنك تتفاهم جيدًا مع جميع الأطراف وكل من تتقابل معه. استمتع بهذه الفترة التي فيها يعكس لك الجميع تعاطفهم، وانتفع من هذه الطاقة الإيجابية للتخلص من الضغط التي تواجهه خلال اليوم واسترجاع هدوئك. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Your diary has become pleasant and exhilarating in nature, as you have a good understanding with all parties and everyone you meet. Enjoy this period in which everyone reflects their sympathy, and benefits from this positive energy to get rid of the pressure you face during the day and restore your calm.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "العديد من الأشياء لا تسير كما ينبغي، فتواجه عراقيل أينما توجهت ويبدو أن الجميع يعمل ضدك. حاول أن تتريث أمام تلك الظروف التي يبدو أنها مناوئة وتعامل معها كونها تحديات.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Many things do not go well, you face obstacles wherever you go and everyone seems to be working against you. Try to wait in front of those circumstances that seem to be hostile and treat them as challenges.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "يبدو أن كل شيء يعمل تلقائيًا، وتُحل المصاعب مباشرةً بمجرد توليك إياها. لكن للأسف لن يستمر هذا الوضع دائمًا، لذا يجب أن تنتفع من هذه الفترة انتفاع كلي. ",

                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Everything seems to work automatically, and the difficulties are solved right away as soon as you take them. Unfortunately, this situation will not always continue, so you should benefit from this period completely.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "يبدو في الوقت الحالي أنك تواجه عددًا متزايدًا من التعقيدات غير المتوقعة. لا يقع اللوم على من هم حولك – في بعض الأحيان تكون أنت المخطئ. حاول أن تظل هادئًا وأن ترى العقبات الموجودة في طريقك كوسيلة لاكتشاف مداخل جديدة. اعد اكتشاف هدوئك وسوف تخرج من هذه المرحلة أقوى. ",

                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "It seems that you are facing an increasing number of unexpected complications. Do not blame those around you - sometimes you're wrong. Try to stay calm and see the obstacles on your way as a way to discover new entrances. Rediscover your tranquility and you will graduate from this stronger phase.",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "أنت تبدو لمن حولك كمُبّشِر متعصب؛ اكبح نفسك قليلاَ واقبل آراء وسلوك الآخرين. كذلك، لا تغضب بسهولة إذا قام الآخرون بأخطاء، ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You look to those around you as a fanatical fan; beat yourself a little and accept the opinions and behavior of others. Also, do not get angry easily if others make mistakes,",

                ),

             Array
                (
                    "day" => "14",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم دع عواطفك وميولك وانتماءاتك جانبًا، وتحرّك بتجرّج، وحاول تفادي المشاكل.. اليوم ربما تعاني من آلام تعيق تحركك بسهولة، وحاول أن تراجع الطبيب، والقيام بتمارين رياضية.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today let your emotions, tendencies and affiliations aside, move in a hurry, and try to avoid problems .. Today you may suffer from pain that hinders your movement easily, and tried to see the doctor, and exercise.",
                ),

        );
            $this->horoscope_data[14]= 

     Array
        (
             Array
                (
                    "day" => "15",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " اليوم عليك التروي في اتخاذ القرارات، وفكر وحلل.. اليوم حان الوقت لتجسيد أمنياتك، وتحقيق رغبة المحيطين بك.. حاول أن توفر على نفسك القيام بمهام الآخرين، واكتف بالمطلوب منك، وارتاح بعض الشيء.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today, you have to take decisions, and think and analyze .. Today is the time to reflect your wishes, and achieve the desire of those around you .. Try to provide yourself to do the tasks of others, and just what is required of you, and relax a bit.",

                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => " اليوم تطلّ على تغييرات إيجابية، وتحلم بالمستقبل، لكن احذر من التطرّف والانفعالات.. اليوم تلعب العلاقات العاطفية دورًا في نجاحاتك، وتعبّر عن نفسك بطريقة لافته تثير إعجاب الشريك، وتعيش بفرح وسعادة.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today looks at positive changes, and dreams of the future, but beware of extremism and emotions .. Today, emotional relationships play a role in your successes, and express yourself in a way that impresses the partner, and live with joy and happiness.",
                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "برج الجوزاء: اليوم ربما يدعمك أصدقاء أو فئات أو جماعات تنتمي إليها، وقد تتلقى مفاجآت سارّة أو تتلقى زيارة مفاجئة.. اليوم حاول ألا توفر أي جهد في سبيل إسعاد الحبيب وتأمين الراحة له، فهو يستحق ذلك.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => " Today may be supported by friends or groups or groups belong to them, you may receive pleasant surprises or receive a surprise visit .. Today tried not to make any effort to please the lover and ensure his comfort, he deserves it.",
                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم تتحسن أمورك مع الزملاء والمحيطين بك، وتتضح بعض النقاط الغامضة.. اليوم ربما تناقش بعض الموضوعات الحسّاسة والجريئة، وتحليلك يصل بك لنتائج إيجابية.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you are getting better with your colleagues and your surroundings, and some ambiguities are emerging. Today you may discuss some sensitive and bold topics, and your analysis brings you positive results.",
                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "بما أنك تتواصل حاليًا بصورة جيدة مع من حولك، وتستطيع عرض خططك في جو من الإثارة، سوف يمكنك أيضًا اجتذاب تابعين متحمسين بسرعة. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Since you are currently communicating well with those around you, and you can show your plans in an atmosphere of excitement, you will also be able to attract enthusiastic followers quickly.",

                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "اليوم لا تغامر من أجل أمور تافهة، فذلك قد ينعكس عليك بالسلب.. اليوم لا تتعجل الوصول لأهدافك، فالتسرع قد يخلق لك متاعب غير متوقعة.. اليوم تستعيد صحتك وعافيتك، وتمارس نشاطا أو هواية تحبها.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today do not venture for trivial things, it may reflect on you negatively .. Today do not rush to reach your goals, haste can create you unexpected troubles .. Today regain your health and wellness, and engage in activity or hobby you love.",
                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " قم بعمل شيء غير عادي اليوم مع أصدقائك. ما رأيك في إقامة حفلة؟ أنت في حالة مزاجية جيدة ويمكنك تًحَمُل أي شيء. لكن لا ترهق نفسك، وإلا فسوف تعرض صحتك للخطر. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Do something unusual today with your friends. What do you think of a party? You are in a good mood and you can afford anything. But do not strain yourself, otherwise your health will be at risk.",

                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " سوف تواجه في حياتك الخاصة جميع أنواع المشكلات، ولكن يجب أن تكون وجهة نظرك واضحة في هذا الموقف. سلامتك الجسدية قد تصبح أفضل. فكر في أسلوب حياتك، ولكن لا تكن قاسيًا على نفسك. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "You will encounter all sorts of problems in your own life, but your point of view should be clear in this situation. Your physical integrity may become better. Think about your lifestyle, but do not be harsh on yourself.",

                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "أنت الآن مفعم بالحيوية، وسوف تتمكن من التعامل مع الموضوعات الهامة. يساعدك التفكير الواضح على الانتهاء من موضوعٍ ما بنجاح. وحتى في حياتك الخاصة، تتضح الشكوك التي كانت لديك، وأنت الآن قادر على اجتياز الصعوبات التي كنت تتحاشاها فيما سبق، وبناءً عليه، سوف يصلك ردًا إيجابيًا على الطريقة التي تعاملت بها مع الأمور. ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You are now full of vitality and you will be able to deal with important topics. Clear thinking helps you finish a topic successfully. Even in your own life, the doubts you have had, and you are now able to overcome the difficulties that you have avoided previously, and accordingly, you will receive a positive response to the way you dealt with things.",

                ),

             Array
                (
                    "day" => "15",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "اليوم جميل وإيجابي، يقدّم لك بعض التقدّم والتفوّق، وربّما يفسح لك مجالاً واسعاً لإظهار مواهبك الجديدة.. اليوم خياراتك بنّاءة تخدم مصلحة العلاقة، أما إذا أردت الارتباط فمن المستحسن اختيار يوم جيّد.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today is beautiful and positive, offers you some progress and excellence, and may give you plenty of room to show your new talents .. Today your constructive options serve the interest of the relationship, but if you want to link it is recommended to choose a good day.",
                ),

             Array
                (
                    "day" => "15",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " اليوم يربكك، ويحمل لك بعض الفرص الشخصية والمهنية.. اليوم تناقش أمورًا جدية، وتخوض علاقة جدية، أو تفكر في مشروع مع الشريك.. حاول أن تأخذ قسطا من الراحة، فأنت متعب ومجهد من ضغط العمل.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today confuses you, and holds you some personal and professional opportunities .. Today you discuss serious things, and are engaged in a serious relationship, or think about a project with the partner .. Try to take a rest, you are tired and hard work pressure.",
                ),

             Array
                (
                    "day" => "15",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم بعض المواضيع قد تشعرك بالحزن، وحاول ألا تقف عند ذلك كثيرًا.. الشريك يساعدك كثيرًا لتتخطى تلك العقبات.. اليوم انتبه لوضك الصحي، ولا تهمل أي عوارض.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today some topics may feel sad, and try not to stand at that much .. The partner helps you a lot to overcome these obstacles .. Today pay attention to your health, and do not neglect any symptoms.",
                ),

        );
             $this->horoscope_data[15]= 

     Array
        (
             Array
                (
                    "day" => "16",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "اليوم تستقطب اهتمام الجميع في محيطك وفي العمل، وتبدو نجم الأماكن والساحات والحفلات.. اليوم مطلوب منك البناء على أسس ثابتة، وإشاعة التفاؤل لدى الشريك وإضفاء الفرح على محيطك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today attracts the attention of everyone in your surroundings and at work, and looks like the star of places, squares and parties .. Today you are required to build on firm foundations, and to spread optimism in the partner and bring joy to your surroundings.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => " اليوم ربما لا تجري أمورك في العمل كما تريد، وعليك أن تقدم بعض التنازلات لكي تستقيم الأمور.. اليوم يبشرك بوضع عاطفي مستقر، ويجب أن تعترف للحبيب بحقيقة مشاعرك دون قلق.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => " Today perhaps you do not do your job as you want, and you have to make some compromises in order to get things right. Today, you are in a stable emotional state, and you have to admit to the lover the truth of your feelings without worrying.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "قد تطرأ أحداث خارجة عن إرادتك تزعجك وتثير توترك، إياك أن تجازف بنجاحك وبمكانتك بسبب بعض الانفعالات",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Events that are beyond your control may disturb you and excite your tension, so do not risk your success and position because of some emotions.",

                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم تناقش مع رب العمل أوراقاً مهمة قد تساعدك في دعم وضعك المادي والمهني والحصول على ترقية.. اليوم هناك طاقة إيجابية للغاية، وتجد نفسك مع الشريك أكثر قوة وعزم.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you discuss with the employer important papers that may help you in supporting your financial and professional status and get promoted .. Today there is a very positive energy, and find yourself with the partner more strong and determined.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم هناك أمل وتبدو مشرقاً، وربما تقدم النصائح للآخرين أو الدعم، وترفض أن تبدو بمظهر الضعيف.. اليوم عليك أن تعزز علاقاتك بالشريك بشكل أكبر، حتى تستطيع العمل معه كأنكما فريق واحد.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today there is hope and looks bright, and may offer advice to others or support, and refuses to look the appearance of the weak .. Today you have to strengthen your relationship with the partner more, so you can work with him as one team.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => " اليوم قد تزعجك بعض المستجدات، لذلك حاول ألا تتوقف عند لحظات كهذه مدة طويلة، ولا تؤزّم الوضع، بل عالجه بهدوء.. اليوم قد تلاحظ بأن الشريك الذي ارتبطت به منذ مدة طويلة يزداد تعلقاً وهياماً بك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today may bother you some of the latest developments, so try not to stop at such moments for a long time, and do not stifle the situation, but calmly treated .. Today you may notice that the partner with whom you have been associated for a long time is becoming more attached to you.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "سوف تحصل اليوم على الكثير من الاهتمام في العمل، كما أن روح الفريق ملحوظة. اعمل في فريق كلما أمكن ذلك، لأن هذا يجعلك تشعر براحتك.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today you will get a lot of interest in work, and team spirit is remarkable. Work in a team whenever possible, because this makes you feel comfortable.",

                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "لا شيء يسير حسب رغبتك في الوقت الحالي، ولكن إذا قمت بتغيير مدخلك، قد تنجز أهدافك بشكل أسرع، كما قد تساعد آراء الآخرين.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Nothing works as you wish at the moment, but if you change your income, you may achieve your goals faster, and may help others' opinions.",

                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " اليوم هناك فرص للسفر والحب والتواصل المميّز والمفاجآت الحلوة.. اليوم أنت على قناعة بأن الحب هو حجر الأساس لبناء علاقة متينة وناجحة تنتهي بالاستقرار",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => " Today there are opportunities for travel, love, special communication and sweet surprises. Today you are convinced that love is the cornerstone for building a strong and successful relationship that ends with stability.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " اليوم لديك اتصالات ناجحة، وتشعر بالقوة، وتطلق مشروعًا جديدًا.. اليوم تحتفل بشيء جديد يغمرك بالسعادة، وتلقي بأحبائك، وربما تزعجك الدعوات المتواصلة من الشريك.. اليوم تشعر ببعض التعب من كثرة العمل.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => " Today you have successful contacts, feel strong, and launch a new project .. Today celebrates something new that overwhelms you with happiness, and receive your loved ones, and may bother you continuous calls from the partner .. Today feel some fatigue from the abundance of work.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " اليوم لا توظف أموالك في استثمارات دون وضع خطط ثابتة، وتريث حتى تجد العرض المناسب.. اليوم يطالبك الشريك بجواب حاسم حول طبيعة علاقتكما، فحاول أن تطمئنه.. اليوم لا تتناول أدوية لا تعرفها، حتى لا تخاطر بوضعك الصحي.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today do not invest your money in investments without the development of fixed plans, and wait until you find the right offer .. Today, the partner asks you a crucial answer about the nature of your relationship, try to reassure him .. Today do not take drugs do not know, so do not risk your health.",
                ),

             Array
                (
                    "day" => "16",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "لا تقلق ولا تيأس إذا وجدت أن أفكارك ووجهات نظرك متعارضة مع الآخرين فهذا يدل بالتأكيد على أنك مختلف في تفكيرك عنهم.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Do not worry and do not despair If you find that your thoughts and views are in conflict with others, this certainly indicates that you are different in your thinking about them.",

                ),

        );
              $this->horoscope_data[16]= 

     Array
        (
             Array
                (
                    "day" => "17",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " اليوم لديك فرص جديدة، ولا تستخف بمسؤولياتك، وابتعد عن التسرع والتهور والعبث بالحسابات.. اليوم تتمتع بوضع عاطفي واعد، وظروف إيجابية تخدمك، وهناك مفاجأة سارة لك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today you have new opportunities, do not underestimate your responsibilities, and go away from recklessness, recklessness and tampering with calculations. Today you have a positive emotional status, positive conditions serve you, and there is a pleasant surprise to you.",
                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "تتلقى اتصالات متعددة لدعمك والوقوف إلى جانبك، فحاول الاستفادة من ذلك قدر المستطاع لفتح صفحة جديدة في حياتك",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "You receive multiple connections to support you and stand by you, so try to use as much as possible to open a new page in your life",

                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "إذا تنازلت للشريك في الأمور الأساسية، فقد تواجه لاحقاً مواقف أكثر صعوبة وعجزاً عن المواجهة في الأمور الكبيرة ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "If you give in to the partner in basic matters, you may face more difficult situations and fail to confront big things",

                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "إذا أحسست أنك منزعج ولا تشعر بالراحة قد يكون السبب تراكم التعب الجسدي والتوتر العصبي .",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "If you feel uncomfortable and uncomfortable, it may be the cause of accumulation of physical fatigue and nervous tension.",

                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " اليوم تزداد رغبتك في التقدم، وتصطدم ببعض العراقيل، لكن بتصميمك تعيد تصحيح الأمور.. اليوم تتسبب في قلق الشريك، فحاول أن تسعده.. اليوم أنت مصطرب صحيًا، وتشعر بعدم راحة.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today, your desire for progress increases, and you encounter some obstacles, but with your determination, you are correcting things. Today you are causing the partner to worry. Try to be happy. Today you are a healthy patient and feel uncomfortable.",
                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "مصارحة الشريك بمشاعرك تجاهه مهمّة، لكنّ لا تكشف أوراقك في هذا المجال لئلا يطمع في أخذ المزيد منك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Informing your partner about your feelings about it is important, but do not reveal your papers in this area so as not to be tempted to take more of you.",

                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "اليوم تخف الضغوط، وربما يأتيك دعما من قبل المسؤولين، أو مساعدة في الوقت المناسب.. اليوم تهتم بالحبيب، وتغدق عليه الوعود والهدايا، لكن لا تقدم على أمر إلا إذا كنت مقتنعاً به.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today the pressure subsides, and perhaps support comes from the officials, or help in a timely manner .. Today you care about the lover, and give him promises and gifts, but do not make an order unless you are convinced of it.",
                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " اليوم كن متحفظًا واحذر من التطاول على سلطة ما أو رفع التحديات، وقد تحدث ظروف عامة تربكك.. اليوم تجد نفسك مجبرًا على تنفيذ الوعود التي قطعتها للشريك، ويسبب لك ذلك الإزعاج والضيق.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today be cautious and be careful not to go over some authority or raise the challenges, and there may be general circumstances Trabk .. Today you find yourself forced to carry out the promises made to the partner, and cause you that inconvenience and distress.",
                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " اليوم تحقق إنجازاً مهمًا، يكون له أثر كبير في مستقبلك، ويدفعك للأمام.. اليوم  تشعل غيرة الحبيب، بسبب تصرفاتك المريبة مع أشخاص من الجنس الآخر أمامه.. اليوم حاول أن تمارس أي نشاط فني.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today achieved an important achievement, which has a great impact on your future, and drives you forward .. Today ignites jealousy of your beloved, because of your suspicious behavior with people of the opposite sex in front of him .. Today tried to exercise any artistic activity.",
                ),

             Array
                (
                    "day" => "17",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " اليوم حاول أن تهدئ من روعك، وأن تمتنع عن الكلام تحت وطأة الغضب والانفعال.. اليوم ابتعد قليلاً ولو على مضض، حتى تهدأ ثورتك.. اليوم بمثابة امتحان لقدرتك على التحمّل والصبر، اظهر حماستك ولا تُهمل الواجبات والمتطلّبات.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today try to calm down your panic, and refrain from speaking under the weight of anger and emotion .. Today, move away a little reluctantly, so calm your revolution .. Today is a test of your ability to endurance and patience, show your enthusiasm and do not neglect the duties and requirements.",
                ),

             Array
                (
                    "day" => "17",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اليوم تحقق تطورًا مهمًا يوفر لك نتائج جيدة، ويساعدك في إنجاز مشروع قد تكون له امتدادات إلى الخارج.. اليوم تكسب جاذبية كبيرة، ويدفعك ذلك لمواجهة الحقائق بثقة، ما يثير إعجاب الشريك بك.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today is an important development that provides you with good results, and helps you in completing a project that may have extensions to the outside .. Today you gain a great attraction, and it drives you to face the facts with confidence, what impresses your partner.",
                ),

             Array
                (
                    "day" => "17",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "يتعين عليك اليوم أن تنتبه لأعدائك فربما لا تستطيع أن تتعرف عليهم ولكن يمكنك بكل سهولة التعرف عليهم من خلال تصرفاتهم فغالبا ما يرغبون في إحباطك والتقليل من شأنك. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today you have to be aware of your enemies. You may not be able to recognize them, but you can easily identify them by their actions. They often want to frustrate you and underestimate you.",

                ),

        );
               $this->horoscope_data[17]= 

     Array
        (
             Array
                (
                    "day" => "18",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "إذا كنت من أصحاب المهن الحرة فقد تعود عليك مبيعاتك بالربح والإضافي. عليك ان تحسم أمورك الصحية، لأن المستقبل غير مطمئن في هذا المجال.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "If you are a freelance professional, your sales may be profitable and extra. You have to decide your health, because the future is not comfortable in this area.",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "يهبك هذا اليوم خبراً سارّاً جداً، وقد يسعى بعضهم لتوريط في أمور غير مهمة، فكن جاهزاً للرد.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "This is a very good news today, and some of them may be trying to get involved in things that are not important, so be ready to respond.",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "لا تكن ضعيفاً أمام العثرات وشدائدها ولا تسمح للآخرين أصحاب النيات السيئة وضع العراقيل أمامك، بل حطّم خبثهم ومَكرهم.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Do not be weak in the face of pitfalls and adversities and do not allow others who have bad intentions to put obstacles in front of you, but smashed their slander and deception.",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "صارح الشريك بما تنوي القيام به، لأنك قد تجد عنده الأفكار البنّاءة والفريدة في نوعها لكل ما يقلقك. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Tell your partner what you intend to do, because you may find constructive and unique ideas for all your concerns.",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم تصطلح أمور كثيرة، ويحمل لك فرص جيدة، وتصحيح لمسار.. اليوم ربما تتقدّم في بعض المشاريع، ومعنوياتك عالية رغم كل العوائق، وتحضر للشريك كثيرا من اللقاءات، وتحمل له مفاجآت سارة.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today, you may progress in some projects, and your morale is high despite all the obstacles, and you get to the partner a lot of meetings, and bring him pleasant surprises.",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "تسير الأمور على نحو جيّد، وتمارس صلاحياتك، وتُذهل الكثيرين بحسن إدارتك الأمور وبالأفكار العملية التي تطرحها وتنفذها على نحو سهل ومقنع. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Things go well, exercise your powers, and astonish many of your good management of things and practical ideas put forward and implemented in an easy and convincing.",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " اليوم هناك مشروع ناجح، يكون ثمرة جهدك المتواصل وسهرك وحرصك على كل خطوة كنت تقوم بها.. اليوم تحصد إعجاب الزملاء وتهنئتهم، ويحاول أحد المغرضين التشويش عليك.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today there is a successful project, which is the result of your continuous effort, your happiness and your keenness on every step you take. Today you reap the admiration of colleagues and congratulate them, and one of the candidates tries to confuse you.",
                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " اليوم قد تقلق بشأن وضع طارئ، حاول ألا توقّع عقداً، ولا تسافر من دون تأكيد حجزك.. اليوم احذر من الأفكار السوداء، فهناك أخبار طيبة تتعلق بحياتك الشخصية أو العاطفية.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today you may worry about an emergency situation, try not to sign a contract, and do not travel without confirmation of your reservation .. Today Beware of black ideas, there is good news about your personal or emotional life.",
                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "اليوم لا تتخذ قرارا، فالقمر يطلب منك التأني والأخذ بالنصيحة وعدم التهور.. اليوم العمل يلهيك عن الحبيب وتبعدك عنه، لذلك فكر في منحه الوقت الكافي.. اليوم الضغوط تبعدك عن ممارسة أنشطتك الرياضية المفضلة.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today does not make a decision, the moon asks you to take care and take advice and not recklessness .. Today work distracts you from the lover and keep away from him, so think of giving him enough time .. Today pressures away from the exercise of your favorite sports.",
                ),

             Array
                (
                    "day" => "18",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "الواقعية هي أكثر الأسلحة قوة لمواجهة الشريك ومصارحته، وهي تساعدك على إعادة الأمور إلى مجاريها الطبيعية",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Realism is the most powerful weapon to confront and appease a partner, and it helps you get things back to normal",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "حاول أن تبتكر أي فكرة تحمل الآخرين على مجاراتك فيها، وتكون سبباً لقيامكم بنشاط رياضي مفيد",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Try to invent any idea that holds others in your tracks, and be a reason for you to exercise a useful sport",

                ),

             Array
                (
                    "day" => "18",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "تشعر بالتوتر والقلق على مدار الأيام الماضية ومن المؤسف أن هذا التوتر سيتستمر الأيام المقبلة أيضا ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Is feeling tense and worried over the past few days and it is regrettable that this tension will continue in the coming days as well",

                ),

        );
        $this->horoscope_data[18]= 

     Array
        (
             Array
                (
                    "day" => "19",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "الشريك هو الأقرب إلى قلبك، وهذا من أبسط قواعد العلاقة الناجحة بينكما والسير نحو تطويرها أكثر فأكثر.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "The partner is the closest to your heart, and this is one of the most basic rules of the successful relationship between you and the path towards further development.",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "الظروف الحالية ليست مشجعة لتترك مقرك في العمل ولا تعقد على نفسك الأمور وحاول أن تجد حلولاً سريعة.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "The current circumstances are not encouraging to leave your workplace and do not hold things to yourself and try to find quick solutions.",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "جو إيجابي لطرح أفكار جديدة بغية تطوير العلاقة، استفد قدر الإمكان ولا تضيّع الفرصة فهي لن تتكرر ثانية في المدى المنظور ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "A positive atmosphere to put forward new ideas in order to develop the relationship, take advantage of as much as possible and do not miss the opportunity it will not be repeated again in the foreseeable future",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "الثقة والإخلاص مع الشريك أبرز عناوين العلاقة الناجحة، وهذا يدفعكما إلى تفعيلها.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Trust and loyalty with your partner are the most important titles of the successful relationship, and this prompts you to activate them.",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "خطوة استثنائية تجاه الشريك تفتح أمامك الأبواب، وتمهّد الطريق لكما للقيام بخطوة انتظرتماها طويلاً.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "An exceptional step toward the partner opens doors for you and paves the way for you to take a long awaited step.",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "حاول أن تظهر بعض الصلابة تجاه الشريك، وهذا لمصلحتك على المدى الطويل، لكن لا بد من اللين أحياناً.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Try to show some firmness toward the partner, and this is for your long-term benefit, but sometimes it is soft.",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " اليوم يشك البعض في قدراتك الإبداعية، لذلك اثبت جداراتك.. اليوم هناك علاقة قديمة تلوح في الأفق، وحاول أن تتطلع إلى المستقبل بتفاؤل كبير، وخطط لما يؤمن لك السعادة والراحة.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today some doubt your creative abilities, so prove your rapprochement. Today there is an old relationship looming, and try to look forward to the future with great optimism, and plans for what gives you happiness and comfort.",
                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم احذر من التخطيط لمشروع جديد، وكن أكثر حرصا على استشارة الآخرين قبل اتخاذ أي قرار.. اليوم تتصرف بعفوية مع الحبيب، وتعامله بلطف ورومانسية كي تستعيد ثقته وحبه لك.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today beware of planning a new project, and be more careful to consult others before making any decision .. Today act spontaneously with the beloved, and treat him gently and romantic to regain confidence and love for you.",
                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "الكلام اللطيف وحده لا يوصلك إلى أي مكان، فحاول أن تنظر إلى الأمور بجدية أكبر لتتمكّن من فرض وجودك على الشريك",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Gentle talk alone does not get you anywhere, try to look at things more seriously so you can impose your presence on the partner",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "لا تدع عنادك يكون سبباً في خلاف مع الحبيب وحاول ألا تكون ردة فعلك مبالغاً فيها تجاهه",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Do not let your stubbornness be a cause of disagreement with your beloved and try not to be overreacted towards him",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "لا تتردّد في تقديم الدعم للشريك، فالأمور قد تتبدّل في غير مصلحتك وتعاكسك الظروف، فلن تجد غيره إلى جانبك ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Do not hesitate to support your partner. Things may change in your own interests and you will not find others next to you",

                ),

             Array
                (
                    "day" => "19",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "ربما يحدث شيء ما يغير أفكارك وحتى قراراتك ولذلك ستشعر بأنك مشوش. من الأفضل أن تؤجل اتخاذ أي قرارات اليوم فربما تتفاجأ بعض المشاكل ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Something may change your thoughts and even your decisions so you will feel confused. It is better to postpone any decisions today. You may be surprised by some problems",

                ),

        );
         $this->horoscope_data[19]= 

     Array
        (
             Array
                (
                    "day" => "20",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "الجهد الذي تبذله ليس سهلاً، وقد تكون له انعكاسات سلبية أبرزها الإرهاق الذي يلوح في الأفق",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Its effort is not easy, and it may have negative repercussions, most notably the looming fatigue",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "مناسبة اجتماعية تتعرف من خلالها إلى شخص مثير للاهتمام وتبدأ معه علاقة جديدة. لا تخف من بعض العوارض الطارئة، لكن هذا لا يمنع من زيارة الطبيب للاطمئنان ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "A social event where you get to know someone interesting and start a new relationship with them. Do not be afraid of some symptoms, but this does not prevent you from visiting the doctor to check",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "تعارض بشدة وحزم ومنطق أي خطوة إذا لم تكن مقتنعاً بها، العشوائية لن تكون في مصلحتك لأنك تدرك جيداً وضعك المهني الحساس.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Strongly and firmly opposed to any step if you are not convinced, randomization will not be in your best interest because you are well aware of your sensitive professional situation.",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "إذا كنت متمسكاً بوجهة نظرك، لا تتردّد في طرحها وحاول أن تنظر إلى الأمور بتفاؤل. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "If you stick to your point of view, do not hesitate to ask it and try to look at things with optimism.",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "تقدم على تغييرات جذرية في العمل، وتشعر بأنّ الحياة تتجاوب معك بدون عراقيل ووفقاً لما خططت له ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Make radical changes to your work, and feel that life is responding to you as you plan",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "مصارحة الشريك بمشاعرك تجاهه مهمّة، لكنّ لا تكشف أوراقك في هذا المجال لئلا يطمع في أخذ المزيد منك. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Informing your partner about your feelings about it is important, but do not reveal your papers in this area so as not to be tempted to take more of you.",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "الجهد الذي تبذله ليس سهلاً، وقد تكون له انعكاسات سلبية أبرزها الإرهاق الذي يلوح في الأفق",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Its effort is not easy, and it may have negative repercussions, most notably the looming fatigue",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "تبذل جهداً كبيراً لتتفوق على الزملاء، وهذا سيشكّل علامة فارقة في مصلحتك يقدرها أرباب العمل أكثر مما تتصور",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Make a great effort to excel at colleagues, and this will be a milestone in your favor that employers value more than you imagine",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "يشتد الشوق والرغبة في تقديم عمل ناجح، تبدو المخيّلة غزيرة جداً فتعيش أحلاماً وأجواء خاصة وتخلق عالمك ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "The desire and the desire to make a successful work, the imagination seems very abundant, living dreams and a special atmosphere and create your world",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "تواجه اليوم تغيراً في المصير، لكن تتعزز عائدات، تميل إلى التبذير في معظم الأحيان",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today, there is a change in fate, but revenues are strengthened, often wasteful",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تستجدّ مسائل طارئة على الصعيد العاطفي، وقد يعترض بعضهم على مواقفك، فلا تؤزم الوضع ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Emotional issues arise on the emotional level, and some may object to your positions, so do not stifle the situation",

                ),

             Array
                (
                    "day" => "20",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "تبذل اليوم قصارى جهدك لتتغلب على الصعاب والتحديات فربما تجد أن هناك صراعا بين رغبتك في المغامرة وحاجتك إلى التواصل أولا مع الآخرين",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Do your best to overcome difficulties and challenges. You may find that there is a conflict between your desire for adventure and the need to communicate first with others",

                ),

        );
          $this->horoscope_data[20]= 

     Array
        (
             Array
                (
                    "day" => "21",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "عليك التفكير بايجابية نحو الآخرين، وتالياً إبعاد نظرية المؤامرة التي أطلّت برأسها أخيراً.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You have to think positively about others, and then throw away the theory of conspiracy that finally came to mind.",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "قد يحاول بعض الزملاء النيل منك، أو على الأقل تشويه صورتك والحط من قدراتك العملية أمام أرباب الشأن، فكن حذراً",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Some colleagues may try to hurt you, or at least distort your image and reduce your practical abilities to the bosses, be careful",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "حدد طبيعة علاقتك مع الحبيب، ولا تدخل في نقاشات تعرف أنها تزعجه وقد تسبب له النفور منك والابتعاد. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Determine the nature of your relationship with the beloved, and do not enter into discussions that you know to be upset and may cause him to alienate you and move away.",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "إذا كنت على خلاف مع حبيبك فالوقت مناسب للمصالحة، شرط توضيح نقاط الخلاف والتفاهم على الأمور الحساسة",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "If you are at odds with your lover, the time is right for reconciliation, provided you clarify points of disagreement and understanding on sensitive matters",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "يوقظ فيك فينوس الحشرية لكشف بعض الأسرار ويجعلك جوبيتير مهتماً بشأن عاطفي ملحّ، لكن حذار العناد وتجنّب الميل إلى الهدم.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Vicken awakens you to uncover some secrets and makes you a jubiter interested in passionate passionate, but beware of stubbornness and avoid the tendency to demolish.",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "إسداء النصائح قد يكون نافعاً، لكنّ العمل بموجبها يفرض عليك قيوداً لم تكن تتوقعها أو كنت تستخف بها، فانتبه",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Advice may be helpful, but working under it will impose restrictions you did not expect or underestimate, so be careful",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "ترغب في الحفاظ على وتيرة الانسجام مع الشريك، وهذا يعود عليك بالفائدة في شتى المجالات ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You want to maintain the pace of harmony with the partner, and this is useful to you in various fields",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "علاقة جديدة تلوح في الأفق، لكن التخلّص من رواسب الماضي ليس سهلاً لأنها حفرت في قلبك عميقاً. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "A new relationship is looming, but getting rid of the past deposits is not easy because it dug deep in your heart.",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "نقاش يؤدّي الى توتر العلاقة مع الحبيب، وقد تكون تداعيات خطيرة على مستقبلكما، إلا تداركت الوضع قبل تفاقمه",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Talk that leads to tension relationship with the beloved, and may have serious repercussions on your future, but the situation was examined before it worsened",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "يحمل هذا اليوم آفاقاً واسعة واحتمالات شتى وتنسيقاً يريحك من قلق ويصحّح بعض الأوضاع، في الجو مصالحة أو لقاء أو عودة قديم الى حياتك ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "This day holds wide horizons and various possibilities and coordination relieves concern and correct some situations, in the air reconciliation or meeting or an old return to your life",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تواكب الشريك في كل تحرّكاته وتكون قربه في أكثر الأوقات حرجاً وتدعمه في كل مواقفه تجاه الآخرين ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "The partner accompanies in all his movements and his proximity at the most critical times and supports him in all his positions towards others",

                ),

             Array
                (
                    "day" => "21",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "بما تغير تفكيرك اليوم بسبب إطلاعك على بعض المعلومات الجديدة ولكن بتواصلك مع الأصدقاء ومناقشتهم في تلك المعلومات قد تتغير الصورة أمامك تمام ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "What changed your mind today because you are aware of some new information, but by communicating with friends and discussing that information, the picture may change completely in front of you",

                ),

        );
           $this->horoscope_data[21]= 

     Array
        (
             Array
                (
                    "day" => "22",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "ترغب في الحفاظ على وتيرة الانسجام مع الشريك، وهذا يعود عليك بالفائدة في شتى المجالات.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You want to maintain the pace of harmony with the partner, and this is useful to you in various fields.",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "لا تدع عنادك يكون سبباً في خلافك مع الحبيب وحاول ألا تكون ردة فعلك مبالغاً فيها تجاهه. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Do not let your stubbornness be the cause of your disagreement with your beloved and try not to be overly exaggerated.",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "الشريك ينتظر منك مبادرة مختلفة عما اعتاده منك لوضع الأمور في نطاقها الصحيح",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Your partner is expecting a different initiative than you used to put things in the right range",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "تشعر بالانفراج وتتنفس الصعداء، أو تتحرّر من قيد، وتسلّط الضوء على شؤون مالية وتفاصيل مادية كثيرة ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Feel relaxed and breathe a sigh of relief, or free of constraint, and highlight the financial affairs and details of many material",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "قد يشعل هذا اليوم حرباً أو نزاعاً أو يتسبّب بمشاكل عامة تطالك في مجال عملك وتدفع أرباب العمل إلى اتخاذ قرار مزعج بحقك. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "This day may ignite a war or conflict or cause public problems in your business and push employers to make a disturbing decision against you.",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "حماستك الزائدة للوقوف إلى جانب الآخرين قد تورّطك في مواجهات شرسة، تمهّل فهذا أفضل ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Your excess enthusiasm to stand by others may have involved you in fierce confrontations, slackening this is better",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "تنعم بالتناغم العاطفي، وقد تجرؤ على مبادرة طالما تحفظت إزاءها وتهتم لوضع جمالي وتتخذ قرارات شخصية مهمة",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "She enjoys emotional harmony, daring an initiative that she has long been cautious about, and is interested in aesthetic status and making important personal decisions",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "تبرز مسألة مالية تتعلق بمستحقات لم تكن على علم بها، ما يجعل طباعك متقلبة وقد تسبب لك المشكلات",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "A financial issue arises about receivables that you did not know about, making your character volatile and causing you problems",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "عليك أن تكون أكثر قوة وأن تعرف كيف تحمي مصلحتك في العمل من أصحاب النيات الخبيثة ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You need to be more powerful and know how to protect your business interests from malicious intent",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "تتعزّز علاقتك بالزملاء والمسؤولين وتقيم اتصالات ولقاءات مثمرة تعود عليك بالفائدة وإن لم يكن الآن ففي المستقبل القريب",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Your relationship with colleagues and officials will be enhanced and contacts and fruitful meetings will be beneficial to you if not now in the near future",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "يكون هذا اليوم مناسباً للقيام بمبادرة أو السعي من أجل هدف ما، وقد يتحدث عن ربح مادي أو مركز أو سفر",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "This day is appropriate for an initiative or quest for a goal, and may speak of material gain, status or travel",

                ),

             Array
                (
                    "day" => "22",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "لديك اليوم القدرة على جذب الشخص المناسب، بالإضافة إلى أن لديك دفعة اضافية من الثقة، وكل هذا سيعجب من مزاجك، ولكن تحتاج أن تحسن أسلوب كلامك قليلا",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "You have the ability today to attract the right person, in addition to having an extra boost of confidence, and all this will admire your mood, but you need to improve your style of speech a bit",

                ),

        );
            $this->horoscope_data[22]= 

     Array
        (
             Array
                (
                    "day" => "23",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تنعم بالتناغم العاطفي، وقد تجرؤ على مبادرة طالما تحفظت إزاءها وتهتم لوضع جمالي وتتخذ قرارات شخصية مهمة.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "She enjoys emotional harmony, daring an initiative that she has long been cautious about, and is interested in aesthetic status and making important personal decisions.",
                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "تثار نقاشات شديدة تتعلق بأعمالك ومشاريعك، وقد يتحدث هذا اليوم عن أسفار ورحلات وتحركات كثيرة",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "There are intense debates about your work and your projects, and this day may speak of many travels, trips and movements",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم تكن قادرًا على إيجاد أساليب جديدة في العمل، ويساعدك ذلك على زيادة دخلك، وكسب ثقة الآخرين.. اليوم لا تدع الأمور تتراكم بينك وبين الحبيب، وناقشها وضع النقاط على الحروف.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today you are able to find new ways to work, and help you to increase your income, and gain the trust of others .. Today do not let things accumulate between you and the beloved, and discussed the placement of points on the letters.",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "إذا كنت من أصحاب القيام بالأنشطة المتعددة، فالوقت مناسب للقيام بها لأنك تتمتع بصحة جيدة",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "If you are the owner doing multiple activities, the time is right to do them because you are in good health",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "عليك أن تكون أكثر حذراً في خياراتك المقبلة، وقد تكون هنالك مطبّات في عرض جديد يقدم إليك في غضون أيام.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You have to be more careful about your future choices, and there may be pitfalls in a new offer coming to you within days.",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "يبدأ أورانوس بالتراجع ويكون القمر مناسباً في برج القوس، ويشكل طالعاً جيداً مع المشتري وأورانوس، فتشعر أنك تلمّ بكل الأمور",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Uranus begins to recede and the moon is suitable in the bow tower, and form a good vision with the buyer and Uranus, you feel that you understand everything",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "يهبك هذا اليوم خبراً سارّاً جداً، وقد يسعى بعضهم لتوريطك في أمور غير مهمة، فكن جاهزاً للرد ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "This is a very good news for you today, and some of them may try to involve you in matters that are not important, so be ready to respond",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "كن دبلوماسياً في التعاطي مع الشريك، وحاوِل أن تستوعب الأمور من دون غضب، ولا تترك للشك مجالاً ليسيطر على تفكيرك ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Be a diplomat in dealing with your partner, and try to absorb things without anger, and leave no room for doubt to control your thinking",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "عليك التفكير بايجابية نحو الآخرين، وتالياً إبعاد نظرية المؤامرة التي أطلّت برأسها أخيراً",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You have to think positively about others, and then throw away the theory of conspiracy that finally came to mind",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "أحذّرك من تسرع أو تهوّر يؤدي إلى بعض التوتر في العلاقة بالشريك، بالعكس عليك أن تكون هادئاً معه إلى أقصى الحدود ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Your warning of speeding or recklessness leads to some tension in the relationship with the partner, on the contrary you have to be calm with him to the fullest extent",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تواجه أعمالاً كثيرة تتراكم، وهموماً ومستجدات وطلبات ومراجعة لبعض الحسابات أو المشاريع، وتطرأ سلبيات تهدد بتراجع معنوي أو بمواجهات وضغوط ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Facing a lot of work accumulating, concerns and updates and requests and review of some accounts or projects, and there are negatives threatening to decline morally or confrontations and pressures",

                ),

             Array
                (
                    "day" => "23",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم قد تحزن بعض الشيء، لكن حاول أن تتخطى حزنك.. اليوم يساعدك الشريك لتخطي مشاكلك، لكن انتبه للوضع الصحي، ولا تهمل أي عوارض، واذهب لاستشارة الطبيب.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today you may feel a bit sad, but try to overcome your grief. Today the partner helps you to overcome your problems, but pay attention to the health situation, and do not neglect any symptoms, and go to consult the doctor.",

                ),

        );
             $this->horoscope_data[23]= 

     Array
        (
             Array
                (
                    "day" => "24",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "ربما تحل مكان أحد المسؤولين، وتستقطب الإعجاب والاحترام، وتقدّم أفكاراً برّاقة وتتواصل مع المحيط المهني بنجاح",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "It may replace one of the officials, attract admiration and respect, offer brilliant ideas and communicate successfully with the career environment",
                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم تطل على تغييرات إيجابية، وتحلم بالمستقبل، لكن احذر من بعض الظروف والتطرّف والانفعالات.. العلاقات العاطفية لها دورًا مهمًا في نجاحاتك، وربما تعبّر عن نفسك بطريقة لافتة تثير إعجاب الشريك.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today looks at positive changes, and dreams of the future, but beware of some circumstances and extremism and emotions .. Emotional relationships have an important role in your successes, and may express yourself in a way that impresses the partner.",
                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " اليوم تستمر بعض الخلافات، وتظهر إلى الواجهة، وربما يتم تأجيل إحدى القضايا.. اليوم تبدأ علاقة جديدة، أو تلتقي شخصًا مختلفًا ومميّزًا.. اليوم تشعر بعدم الرضا عن وضعك الصحي، وتعيد حساباتك، وتفكر بشأن الحلول.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today some differences continue, and they appear to the forefront, and perhaps one of the issues is postponed. Today a new relationship begins, or you meet someone different and different. Today you feel dissatisfied with your health, restore your calculations and think about solutions.",
                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم تتحسن الأمور مع الزملاء، وتتضح بعض النقاط الغامضة، وتناقش بعض الموضوعات الحسّاسة والجريئة.. اليوم استنتاجاتك الخاصة تصلك بك لنتيجة مفادها أن الحبيب يعيش قلقا بسببك، فبادر إلى تخليصه.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today things are getting better with colleagues, some ambiguities are clear, some sensitive and bold topics are being discussed. Today your own conclusions come to you because the lover is worried about you.",
                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "تأتي أحداث لتترك انعكاسات سلبية على شعبيتك وعلاقاتك الشخصية والاجتماعية في محيطك. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Events come to leave negative repercussions on your popularity and your personal and social relationships in your surroundings.",

                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "اليوم لا تغامر من أجل أمور تافهة، فذلك قد ينعكس عليك بالسلب.. اليوم لا تتعجل بالوصول لأهدافك، فالتسرع قد يخلق لك متاعب غير متوقعة.. اليوم تستعيد صحتك وعافيتك، وتمارس نشاطا أو هواية تحبها.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today do not venture for trivial things, it may reflect on you negatively .. Today do not rush to reach your goals, haste can create you unexpected troubles .. Today regain your health and wellness, and engage in activity or hobby you love.",
                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "تتلقى اتصالات متعددة لدعمك والوقوف إلى جانبك، فحاول الاستفادة من ذلك قدر المستطاع لفتح صفحة جديدة في حياتك ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You receive multiple connections to support you and stand by you, so try to use as much as possible to open a new page in your life",

                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "قد تضطر إلى التحفّظ عن التعبير عن آرائك أمام الشريك وانتظار فترة أفضل للكلام المناسب واللائق.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "You may have to refrain from expressing your opinions in front of your partner and waiting for a better period of appropriate and decent speech.",

                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "إبتعد عن العدائية. قد تعيش التباساً، وتعتقد أنّ أحلامك هي حقيقة. تجنّبْ في هذه الفترة المضاربات المالية. كُنْ متفاهماً مع الشريك أو الحبيب إذ قد تعرّض علاقة لك للخطر",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Stay away from hostility. You may live in confusion, and believe that your dreams are true. Avoid in this period financial speculation. Be sympathetic with your partner or lover as you may be in danger",

                ),

             Array
                (
                    "day" => "24",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "تركّز على عملية شرائية أو عملية بيع وتتعاطى مع جهات متعنّتة ربما، إلاَّ أنَّ مثابرتك ومواظبتك على العمل فتأتيان بالنتائج المرجوّة وتجعلانك تربح الرهان",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Focus on a buying or selling process and deal with intransigent parties, but your perseverance and perseverance will have the desired results and make you win the bet",

                ),

             Array
                (
                    "day" => "24",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "نتظر حتى تتأكد من طبيعة الأجواء المهنية ثم قرر إن كنت ستقدر على مواكبتها أم لا، وعليك أن تتخلى عن عنادك فى الفترة الحالي",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "We wait until you are sure of the nature of the professional atmosphere and then decide whether you will be able to cope with it or not, and you have to give up your stubbornness in the current period",

                ),

             Array
                (
                    "day" => "24",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم تقضي اليوم في اجتماعات مهمة، وتأخذ قرارات حاسمة، وتتلقى كثيرا من عروض العمل المغرية.. اليوم قد توجّه بعض الملاحظات إلى الحبيب حول تصرفاته، وتقدّم بعض التنازلات لتنجح علاقتك به.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today you spend important meetings, make crucial decisions, and receive many tempting offers. Today, you may make some notes to your loved ones about your actions and make some compromises for your relationship to succeed.",

                ),

        );
              $this->horoscope_data[24]= 

     Array
        (
             Array
                (
                    "day" => "25",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "اليوم هناك فرصة جديدة فلا تستخف بمسؤولياتك، وابتعد عن التسرع والتهور.. اليوم يتحسن وضعك العاطفي، وهناك ظروف إيجابية، وتعيش يومًا مشوقًا للغاية، وتوقع خلاله مفاجأة سارّة.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today there is a new opportunity Do not underestimate your responsibilities, and away from the rush and recklessness .. Today your emotional situation improves, there are positive conditions, and live a very interesting day, and expect a pleasant surprise.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم يحمل لك بعض الحلول لمشاكل سابقة، وتتصل بالآخرين، وربما تتعرف على شيء جديد.. اليوم هناك بعض التغيير في روتين علاقتك مع الحبيب، وهذا يزيد من إعجابك به، وتستعيدا معًا ذكريات الماضي الجميل.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today brings you some solutions to previous problems, and relate to others, and you may know something new .. Today there is some change in the routine of your relationship with the beloved, and this increases your admiration for him, and restore together memories of the beautiful past.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم حاول أن تكون أكثر قوة، واعرف كيف تحمي مصلحتك في العمل من أصحاب النيات الخبيثة.. اليوم نقاشك قد يؤدى لتوتر العلاقة مع الحبيب، فحاول أن تتدارك الوضع قبل تفاقمه، ومارس تمارين رياضية.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today try to be more powerful, and know how to protect your interest in the work of the owners of malicious intentions .. Today, your discussion may lead to tension relationship with the beloved, tried to remedy the situation before the aggravation, and practiced exercises.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " اليوم تتحسن أمورك مع الزملاء والمحيطين بك، وتتضح بعض النقاط الغامضة.. اليوم ربما تناقش بعض الموضوعات الحسّاسة والجريئة، وتحاليلك تصل بك لنتائج إيجابية.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you are getting better with your colleagues and surroundings, and some ambiguities are evident. Today you may discuss some sensitive and bold topics, and your analysis will reach you with positive results.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "قد تركز على علاقة عاطفية تسبب لك القلق والإزعاج وتنفر المقربين منك",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Focusing on an emotional relationship may cause you anxiety, discomfort and alienation from your close associates",

                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "اليوم مناسب لتحدي بعض الجهات، ويحمل لك حوافز كثيرة.. اليوم احذر من الدخول في نزاعات مع أحد الرؤساء، أو مع أحد أفراد العائلة.. قد يكلفك الشريك بمهمة جديدة، وتجد صعوبة كبيرة في إنجازها.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today is suitable to challenge some parties, and you have many incentives .. Today Beware of entering into disputes with a president, or with a family member .. Your partner may cost you a new task, and find it difficult to accomplish.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "الظروف الحالية ليست مشجعة لتترك مقرك في العمل ولا تعقد على نفسك الأمور وحاول أن تجد حلولاً سريعة ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "The current circumstances are not encouraging to leave your workplace and do not hold things to yourself and try to find quick solutions",

                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "أينما كنت تبدو متحمساً، واعياً ما يحصل، مسيطراً على الأمور ومنفتحاً على آفاق جديدة ترضيك ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Wherever you look enthusiastic, conscious of what is happening, controlling things and open to new horizons to your liking",

                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "اليوم يتطلب منك التأني والأخذ بالنصحية، وعدم التهور.. واحذر من الحياة العملية التي قد تبعدك عن الحبيب، حاول أن تمنحه الوقت الكافي، وابقى بقربه دائمًا.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today requires you to take care and take the sacrifice, and not recklessness .. And beware of the practical life that may keep you away from the beloved, try to give him enough time, and keep near him always.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "اليوم تشعر بالقوة، وتحتفل بإنجاز جديد.. اليوم ربما تغضب من شريكك بسبب دعواته المتصلة، حاول أن تصارحه بهذا الأمر.. اليوم ربما تشعر ببعض التعب بسبب كثرة العمل.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today feels strong, and celebrates a new achievement .. Today may be angry with your partner because of his calls related, try to explain this thing .. Today you may feel some fatigue because of the large number of work.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اليوم لا توظّف أموالك في استثمارات، وضع خططا ثابتة وتريث حتى تجد العرض المناسب.. اليوم يسألك الشريك عن طبيعة علاقتكما، حاول أن تحتوي الأمر واحتويه.. اليوم احذر من مضاعفات وضعك الصحي، واذهب لاستشارة الطبيب.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today do not invest your money in investments, develop stable plans and wait until you find the right offer .. Today the partner asks you about the nature of your relationship, try to contain and contain .. Today Beware of complications of your health, and go to consult the doctor.",
                ),

             Array
                (
                    "day" => "25",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم هناك بعض المواضيع المربكة التي تشعرك بالحزن، وحاول ألا تقف عند ذلك الحزن كثيرًا.. الشريك يساعدك كثيرًا لتتخطى تلك العقبات.. اليوم انتبه لوضك الصحي، ولا تهمل أي عوارض.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today there are some confusing topics that make you feel sad, and try not to stop at that much grief .. The partner helps you a lot to overcome these obstacles .. Today pay attention to your health, and do not neglect any symptoms.",

                ),

        );
               $this->horoscope_data[25]= 

     Array
        (
             Array
                (
                    "day" => "26",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "اليوم هناك مساعدة قيمة تتلقاها من قبل أحد الزملاء، وطاقتك تفوق قدراتك الذاتية.. اليوم إرادتك الصلبة لن تكون كافية للرد على جميع متطلبات الشريك وتنفيذها.. حاول أن تطلب مساعدة الآخرين لدعمك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today there is valuable help you receive by a colleague, and your energy outweighs your own abilities .. Today your solid will will not be enough to answer all the partner's requirements and implement them .. Try to ask others to help you.",

                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم تطل على تغييرات إيجابية، وتحلم بالمستقبل، لكن احذر من الانفعالات.. اليوم تلعب العلاقات العاطفية دورًا في نجاحاتك، وتعبر عن نفسك بطريقة لافته تثير إعجاب الشريك، وتعيش بفرح وسعادة.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today looks at positive changes, and dreams of the future, but beware of emotions .. Today, emotional relations play a role in your successes, and express yourself in a way that impresses the partner, and live with joy and happiness.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم ربما تعاني من مشاكسات في العمل، فلا تجازف ولا تُبح بأسرارك.. اليوم اهتم بمشاعر الحبيب، ولا تسبب له الإحراج أمام الآخرين.. اليوم كل ما تقوم به على الصعيد الرياضي مفيد.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today you may suffer from quarrels at work, do not risk and do not brag your secrets .. Today care about the feelings of the beloved, and do not cause embarrassment to others .. Today everything you do on the level of sports is useful.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " اليوم تغير شيئا بحياتك، وتتخلص من كل ما يزعجك ويعيق تحركاتك.. اليوم برهن للجميع أنك صاحب إرادة صلبة، وحاول أن تنهي حالة التردد الملازمة لك، واجتهد لوضع أسس جديدة ومتينة.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => " Today change something in your life, get rid of everything that bothers you and hinder your movements .. Today prove to all that you have a solid will, and tried to end the state of frequency inherent in you, and strive to establish new foundations and solid.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم تزداد رغبتك في التقدم، وربما تصطدم ببعض العراقيل، لكن بتصميمك تعيد تصويب الأمور.. اليوم أنت سبب القلق الذي يعيشه الشريك، فحاول أن تخلصه مما يعانيه، واجعله يشعر بالسعادة.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today you are growing in desire to progress, and you may encounter some obstacles, but with your determination re-straighten things .. Today you are the cause of anxiety experienced by the partner, try to get rid of what is suffering, and make him feel happy.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "اليوم عليك التفكير بايجابية نحو الآخرين، وحاول أن تبعد نظرية المؤامرة عنك.. اليوم  ترغب في الحفاظ على وتيرة الانسجام مع الشريك، وهذا يعود عليك بالفائدة في شتى المجالات.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today you have to think positively about others, and try to keep the conspiracy theory away from you. Today you want to maintain the pace of harmony with the partner, and this is useful to you in various fields.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "هذا اليوم هو الأنسب لتسوية قضية عالقة أو للمصالحة أو لكسب تأييد معيّن",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "This day is most appropriate to settle a pending issue, to reconcile or to gain a certain support",

                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "فكّر في مستقبلك إذا أردت الحفاظ على صحة رشيقة، ولا تدع السمنة تسيطر عليك ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Think about your future if you want to keep your health agile, and do not let obesity control you",

                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " اليوم لا تتخذ قرارا، فالقمر يطلب منك التأني والأخذ بالنصيحة وعدم التهور.. اليوم العمل يلهيك عن الحبيب ويبعدك عنه، لذلك فكر في منحه الوقت الكافي.. اليوم الضغوط تبعدك عن ممارسة الرياضة المفضلة.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today does not make a decision, moon asks you to take care and take advice and not recklessness .. Today work distracts you from the lover and keep away from him, so think of giving him enough time .. Today pressures away from the exercise of favorite.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " اليوم تبدو متحمسًا، وواعيًا لما يحدث، وتسيطر على الأمور، وتنفتح على آفاق جديدة ترضيك.. اليوم تضطر للتحفّظ على آرائك أمام الشريك، من الأفضل أن تنتظر للوقت المناسب واللائق، فأنت غاضب.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today you look enthusiastic, aware of what is happening, controlling things, and opening up new horizons to your liking. Today you have to keep your opinions in front of your partner, it is better to wait for the right time and you are angry.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اليوم تشكو من ضعف مردودك المالي، وتطالب بالزيادة التي تستحقها، لكنك تصطدم بواقع مؤلم يزعجك كثيرًا.. اليوم طلبات الحبيب ترهقك ولا تعرف كيف تلبّيها، ومع ذلك تراعي مشاعره وتقدر ظروفه.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today complain about the weakness of your financial return, and demands the increase you deserve, but you collide with a painful reality bothers you a lot .. Today demands lover tired and do not know how to meet, yet consider his feelings and appreciates his circumstances.",
                ),

             Array
                (
                    "day" => "26",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم تشعر بالكآبة، أو بالرغبة في الاستسلام.. اليوم حاول أن تطرد الأفكار السلبية، مهما كانت نفسيتك مُتعبة.. اليوم لا تخاف على عواطفك وآمالك من الخيبة، فالوضع مستقر نسبياً ويميل إلى الوضوح.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today you feel depressed, or want to surrender .. Today tried to expel negative thoughts, no matter how tired your soul .. Today do not be afraid of your emotions and your hopes of disappointment, the situation is relatively stable and tends to clarity.",

                ),

        );
                $this->horoscope_data[26]= 

     Array
        (
             Array
                (
                    "day" => "27",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "اليوم لديك فرص جديدة، لا تستخف بمسؤولياتك، وابتعد عن التهور والعبث بالحسابات.. اليوم تتمتع بوضع عاطفي واعد، وظروف إيجابية تخدمك، وهناك مفاجأة سارة لك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today you have new opportunities, do not underestimate your responsibilities, and avoid recklessness and tampering with calculations. Today you have a positive emotional status, positive conditions serve you, and there is a pleasant surprise to you.",

                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => " اليوم تواجه أعمال متراكمة كثيرة، وهموم ومستجدات، وربما تراجع بعض الحسابات أو المشاريع.. اليوم قد تطرأ سلبيات، وتهدد بتراجع معنوي أو بمواجهات وضغوط، وهناك مسائل طارئة على الصعيد العاطفي.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today is facing a lot of accumulated work, concerns and developments, and perhaps some calculations or projects decline .. Today may be negative, and threatens to decline morally or confrontations and pressures, and there are issues on the emotional level.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم هناك مفاجأة سارة لك، أو هدية، أو ربما تتلقى خبر جيد، اليوم تتحدث عن سفر أو عن رحلة تقوم بها، أو ربما تقضي أمسية رومانسية برفقة الحبيب تقوي العلاقة بينكما وتؤجج المشاعر.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today there is a pleasant surprise for you, or a gift, or perhaps you receive good news, today talking about travel or a trip you do, or perhaps spend a romantic evening with the lover strengthen the relationship between you and foment feelings.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم لديك شوق ورغبة في تقديم عمل ناجح، ومخيلتك غريزة تجعلك تعيش أحلام.. عليك أن تفهم أن الكلام اللطيف وحده لا يوصلك إلى أي مكان، فحاول أن تنظر إلى الأمور بجدية أكبر لتتمكّن من فرض وجودك على الشريك.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you have a longing and desire to make a successful work, and your imagination instinct to make you live dreams .. You have to understand that gentle talk alone does not connect you anywhere, try to look at things more seriously to be able to impose your presence on the partner.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم انتبه وكن حذرًا جدًا، ولا تعطي ثقة عمياء، ولا تصدّق بعض الأوهام.. اليوم تعيش علاقة عاطفية مميزة وواعدة، ونهايتها تكون سعيدة.. خفف من تدخلك في مشاكل الآخرين، حتى لا تسمع ما لا يرضيك.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today Be careful and be very careful, do not give blind trust, and do not believe some illusions .. Today live a special relationship and promising, and end happy .. Reduce your interference in the problems of others, so as not to hear what does not satisfy you.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "يبدأ اليوم بوضع مطمئن، فتفرح بعلاقة جديدة، وتتمتع بأوقاتك.. اليوم تلتقي بمن يثير اهتمامك وانتباهك وتكون سعيدًا، لكن احذر من مسائل شخصية مربكة، ربما تشتّت أفكارك.. اليوم قد تحدث مشكلة للشريك أو لشخص عزيز عليك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today, you may meet someone who is interested and interested in you and be happy, but beware of embarrassing personal issues. Your ideas may be distracted. Today a problem may arise for your partner or someone dear to you.",

                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " اليوم يشكك بعض زملائك في قدراتك الإبداعية، لذلك حاول أن تثبت جدارتك وضعهم عند حدهم.. اليوم هناك علاقة قديمة تلوح بالأفق، حاول أن تتطلع للمستقبل بتفاؤل وتخطيط.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today some of your colleagues are questioning your creative abilities, so try to prove your ability to put them on their own. Today there is an old relationship looming in the horizon, try to look ahead with optimism and planning.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم احذر من التخطيط لمشروع جديد، وحاول أن تتصرف بعفوية مع الحبيب حتى تقربه منك أكثر.. اليوم تستعيد ذكرياتك الجميل وتمارس الرياضة، وتأخذ قسطا من الراحة.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => " Today beware of planning a new project, and try to act spontaneously with the beloved so closer to you more .. Today regain your beautiful memories and exercise, and take a rest.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "اليوم احذر ولا تبدأ بمشروع جديد، وحاول أن تكون أكثر حرصًا، واستشير الآخرين.. اليوم تتصرف بعفوية مع الشريك، ويتقرب منك، وتعامله بلطف ورومانسية، وتستعيد ثقته وحبه لك.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today be careful not start a new project, and try to be more careful, and consult others .. Today act spontaneously with the partner, and draws close to you, and treat him gently and romantic, and regain his confidence and love for you.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " اليوم لديك اتصالات ناجحة وتشعر بالقوة، وتطلق مشروعًا جديدًا.. اليوم تحتفل بشيء جديد يغمرك بالسعادة، وتلتقي بأحبائك، وربما تزعجك الدعوات المتواصلة من الشريك.. اليوم تشعر ببعض التعب من العمل الزائد.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today you have successful contacts and feel strong, and launch a new project .. Today celebrates something new to overwhelm you, and meet your loved ones, and may be bothersome continuous calls from the partner .. Today feel some fatigue from overwork.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تواجه اليوم تغيراً في المصير، لكن تتعزز عائداتك، فتميل إلى التبذير في معظم الأحيان.. اليوم أحذّر من تسرع أو تهوّر، يؤدي إلى بعض التوتر في العلاقة بالشريك، بالعكس عليك أن تكون هادئًا معه.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today is facing a change in fate, but your earnings are strengthened, tends to waste most of the time .. Today, beware of rush or recklessness, leads to some tension in the relationship with the partner, on the contrary you have to be calm with him.",
                ),

             Array
                (
                    "day" => "27",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم تعزّز علاقتك بالزملاء والمسؤولين، وتقيم اتصالات ولقاءات مثمرة، تعود عليك بالفائدة.. اليوم لا تتردّد في تقديم الدعم للشريك، فالأمور قد تتبدّل في غير مصلحتك وتعاكسك الظروف.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today, strengthen your relationship with colleagues and officials, and establish contacts and fruitful meetings, which benefit you .. Today do not hesitate to support the partner, things may change in your interests and reflect the circumstances.",

                ),

        );
                 $this->horoscope_data[27]= 

     Array
        (
             Array
                (
                    "day" => "28",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "اليوم تكن مستعدًا للبدء في التخطيط لمشاريع مقبلة، وتسير الأمور كما هو متوقّع لها.. اليوم هناك مفاجآت ضخمة وجيدة تتلقاها، وربما تقلق بسبب تعامل الحبيب معك غير المعتاد، فلا تتجاهل نصائحه لك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today you are ready to begin planning for future projects, and things are going as expected. Today there are huge and good surprises you receive, and you may worry about your lover's unusual dealings with you, so do not ignore his advice to you.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "برج الجوزاء: اليوم أنت قادر على إيجاد أساليب جديدة في العمل، ويساعدك ذلك على زيادة دخلك، وتكسب ثقة الآخرين.. اليوم لا تجعل الأمور تتراكم بينك وبين الحبيب.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today you are able to find new ways to work, and help you to increase your income, and win the trust of others .. Today do not make things accumulate between you and the beloved.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "مهنياً: دورة جيدة من الاتصالات والنجاح الاجتماعي والمهني تستمر حتى آخر الشهر تقريباً",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Professionally: A good cycle of communication and social and professional success lasts until the last month",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " اليوم قد تستاء من عدم تجاوب شخص تصبو إليه، أو ترتاب من برودة في التصرفات أو غياب مفتعل هذا الوقت.. اليوم لا تعرف كيف تحدد طبيعة علاقتك بالحبيب، وتحاول البحث عن طريقة تكون ناجحة.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you may resent the non-response of someone you aspire to, or be suspicious of the coolness of the behavior or lack of fabricated this time .. Today do not know how to determine the nature of your relationship lover, and trying to find a way to be successful.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم تزداد رغبتك في التقدم، وتصطدم ببعض العراقيل، لكن بتصميمك تعيد تصحيح الأمور.. اليوم تتسبب في قلق الشريك، فحاول أن تسعده.. اليوم أنت مصطرب صحيًا، وتشعر بعدم راحة.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today, your desire for progress increases, and you encounter some obstacles, but with your determination, you are correcting things. Today you are causing the partner to worry. Try to be happy. Today you are a healthy patient and feel uncomfortable.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => "اليوم حاول أن تمارس الركض الخفيف صباحا, وأتبعه ببعض حركات الليونة. صلح لقاء بسيط مشكلات قديمة وعالقة بينكما.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today he tried to practice light jogging in the morning, followed by some softness movements. Simple reconciliation is a long-standing problem.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " اليوم يشك البعض في قدراتك الإبداعية، لذلك اثبت جداراتك.. اليوم هناك علاقة قديمة تلوح في الأفق، لكم حاول أن تتطلع إلى المستقبل بتفاؤل كبير، وخطط ما يؤمن لك السعادة والراحة.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today there is an old relationship looming, you try to look forward to the future with great optimism, and plans what you believe in happiness and comfort.",

                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم كن دقيقًا، وقد يحمل خيبة للبعض، وفراقًا للبعض الآخر، أو تراجعًا عن قرار.. اليوم قد يحدث بلبلة في الاتصالات، وسوء تفاهم بين الزملاء.. تصرفاتك الطائشة قد تبعد الحبيب عنك، وحاول أن تأخذ قسطا من الراحة.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today be accurate, and may be a disappointment to some, a breakthrough for others, or a retreat from a decision .. Today may be a confusion in communication, misunderstanding between colleagues .. Your reckless behavior may distance the lover from you, and tried to take a break.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "الظروف الحالية ليست مشجعة لتترك مقرك في العمل، ولا تعقد على نفسك الأمور، وحاول أن تجد حلولاً سريعة.. اليوم لا تدع عنادك يكون سبباً في خلافك مع الحبيب، وحاول ألا تكون ردة فعلك مبالغاً فيها تجاهه.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Current circumstances are not encouraging to leave your workplace, do not hold yourself to things, and try to find quick solutions .. Today do not let your stubbornness be the cause of your disagreement with the beloved, and try not to be overreacted towards him.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " يحمل هذا اليوم آفاقاً واسعة واحتمالات شتى، وتنسيقاً يريحك من قلق ويصحّح بعض الأوضاع.. اليوم وضعك به مصالحة أو لقاء أو عودة قديم إلى حياتك، والواقعية هي أكثر الأسلحة قوة لمواجهة الشريك ومصارحته.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "This day holds wide horizons and various possibilities, coordination and comfort you from anxiety and correct some of the situation .. Today you put a reconciliation or meeting or an old return to your life, and realism is the most powerful weapon to meet the partner and his companions.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اليوم حاول أن تستغل الفرص التي تتوافر، وحاول أن ترى الإيجابيات، وربما تتلقى عروضا جديدة وتتطلع لآفاق عالية.. اليوم احذر من النقاشات، فقد تحمل أزمة أو تدهورًا في العلاقة.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today try to take advantage of the opportunities available, and try to see the pros, and you may receive new offers and looking for high prospects .. Today Beware of discussions, it may suffer a crisis or deterioration in the relationship.",
                ),

             Array
                (
                    "day" => "28",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم يدعوك للتكيف مع بعض العادات والأساليب المستحدثة والتقنيات المهمة، اليوم تسير الأمور بشكل جيد، وتعزز الروابط وتؤكد الأسس، اليوم قد تكون قلقًا ومضطربًا بانتظار نتائج لأمر ما يشغل بالك.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today invites you to adapt to some of the new habits, techniques and techniques. Today, things are going well, strengthening ties and confirming the foundations. Today you may be worried and confused waiting for results to be taken for granted.",
                ),

        );
                  $this->horoscope_data[28]= 

     Array
        (
             Array
                (
                    "day" => "29",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "اليوم مناسب للقيام بمبادرة، وتسعى لأجل هدف ما، وتتحدث عن ربح مادي أو سفر.. اليوم تلازم الشريك في كل تحركاته، وتكون بقربه في أكثر الأوقات حرجاً، وتدعمه في كل مواقفه تجاه الآخرين.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => " Today is appropriate to initiate, seek for a goal, and talk about financial gain or travel .. Today accompanies the partner in all his movements, and be close to the most critical times, and support in all his attitudes towards others.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم قد يحدث نزاع في حياتك المهنية، ولكنك قادرًا على التخلص من المعاكسات، اليوم ربما يعجبك شخص ما وتبذل المستحيل لتنال رضاه، فتحاول أن تراعي مشاعره أكثر أمام الآخرين.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today there may be a conflict in your career, but you are able to get rid of the adverse, today you may like someone and make the impossible to get satisfaction, trying to take into account his feelings more in front of others.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "عاطفياً: لا تغر من نجاح الحبيب وتألقه في مجال عمله، بل شجعه على المزيد فهو نصفك الآخر",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Emotionally: Do not underestimate the success of the beloved and his brilliance in the field of his work, but encouraged him more is the other half",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم تلقى الضوء على بعض الاحتياجات المادية والكمالية، وتقوم بعملية شرائية كبيرة، اليوم الأمور تحت، وتكون حاسمًا تجاه بعض المواقف،  اليوم حاول أن تسيطر على انفعالاتك أمام الجميع.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today has highlighted some of the material and luxury needs, and is doing a big purchase, today things are under, and be critical to some situations, today try to control your emotions in front of everyone.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم يعود عليك بالربح الإضافي، ويتقرب الشريك لقلبك، وتسيرا معًا نحو تطويرها.. اليوم الجهد الذي تبذله ليس سهلاً، وربما يكون له انعكاسات سلبية أبرزها الإرهاق الذي يلوح في الأفق.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today returns to you the additional profit, and draws the partner to your heart, and go together to develop .. Today the effort is not easy, and may have negative repercussions, most notably the fatigue that looms on the horizon.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج العذراء",
                    "number" => "6",
                    "significance" => " اليوم يجب أن تتأني وتنتبه لوضعك المهني، ولن تنفعك المواقف الصارمة والمتشدّدة مع الحبيب، بل تلك الهادئة والمرنة لحل المشاكل.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today you must be careful and pay attention to your professional status, and will not benefit rigid positions and strict with the beloved, but those quiet and flexible to solve problems.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "اليوم تلفت الأنظار لمواهبك، وأنت تستطيع تنفيذ عدة مهام صعبة، وتحقق نتائج باهرة.. ينتابك سؤالاً ملحًا حول التوقيت الذي يسمح لك بالتمتع بمباهج الحياة العاطفية ولحظاتها الجميلة، وتعيد النظر في أولوياتك.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today draws attention to your talent, and you can perform several difficult tasks, and achieve impressive results .. You are asked a question about the timing that allows you to enjoy the pleasures of emotional life and beautiful moments, and reconsider your priorities.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم احذر من التخطيط لمشروع جديد، وكن أكثر حرصاً على استشارة الآخرين قبل اتخاذ أي قرار.. اليوم تتصرف بعفوية مع الحبيب، وتعامله بلطف ورومانسية كي تستعيد ثقته وحبه.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today beware of planning a new project, and be more careful to consult others before making any decision .. Today act spontaneously with the beloved, and treat him gently and romantic to regain confidence and love.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "اليوم حاول أن تكون هادئًا، فالحظ يعطيك فرصة جديدة في مجال عملك، وربما يكون هناك منحة أو مكافأة.. اليوم حاول أن تستثمر علاقاتك الجيّدة بالشريك لتعزيز موقعك في قلبه، وازدياد ثقته بك.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today try to be quiet, so you will be given a new opportunity in your field, and there may be a bonus or a reward .. Today try to invest your good relationship partner to strengthen your site in his heart, and increase his confidence in you.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "اليوم تشعر بالانسجام مع نفسك ومع المحيط، وتبدو متحمسًا لكل ما يروق لك.. اليوم هناك بعض المشاحنات، بسبب طباعك المتقلّبة، وتسارع إلى اتّهام الحبيب، وتندم لاحقاً على ما سببت له من أذى معنوي.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today you feel in harmony with yourself and with the ocean, and look enthusiastic about everything you like. Today there are some quarrels, because of your volatile character, and quick to accuse the beloved, and later regret what caused him moral harm.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اليوم تفرض عليك بعض المحظورات والممنوعات، لكن تطرأ تغييرات تناسبك، وتجعلك تتبنّى وجهة نظر جديدة، كثرة طلبات الشريك تدفعك إلى رفض هذا الواقع، خصوصًا أن الأمور بلغت حداً لا يمكن السكوت عنه.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today impose some prohibitions and prohibitions, but changes occur in your favor, and make you adopt a new point of view, the many demands of the partner push you to reject this fact, especially that things have reached an extent can not be silent about it.",
                ),

             Array
                (
                    "day" => "29",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "تتطوّر صداقة ما إلى علاقة حب وتقرّب المسافة بين الأحبّاء نظراً إلى خلو الأجواء من المشاعر السلبيّة",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "A friendship develops into a love relationship and brings the distance between loved ones closer to the absence of negative emotions",
                ),

        );
                   $this->horoscope_data[29]= 

     Array
        (
             Array
                (
                    "day" => "30",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "اليوم ربما يحدث فراق أو رحيل، أو ربما مشكلة طارئة تضطر إلى معالجتها، اليوم قد تعيش مشاكسة ما، أو تعالج خطأ مفاجئ، أو ربما تواجه ببعض الأخبار المربكة.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today there may be separation or departure, or perhaps an emergency problem that needs to be addressed. Today, you may live a bit of a hassle, or deal with a sudden mistake, or you may encounter some confusing news.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "يسهل أمامك هذا اليوم الاتصالات ويجعلك أكثر تناغماً مع المحيط، ولا تخجل من طلب المساعدة من الزملاء في حال شعورك بكثرة الضغوط عليك",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Make it easier for you today to communicate and make you more in tune with the ocean. Do not be shy about asking for help from colleagues if you feel a lot of pressure on you.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " سوف تساعد الديناميكية التي تنمو بين الفريق على الوقوف بصلابة أمام أصعب التحديات والوصول معًاً إلى النجاح. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "The dynamic that grows between the team will help to stand firm against the most difficult challenges and come together to succeed.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "يركّز هذا اليوم الضوء على قضايا مادية ومالية تستحوذ على كامل اهتماماتك في العمل وتتوصل إلى نتائج جيدة لها",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "This day focuses on material and financial issues that capture your full interest in work and produce good results for it",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "تتخلص من بعض الحساسيات والنعرات، ويجعلك ذلك مطمئنا وميالاً للسكينة، وتتغلب على الثورة التي في داخلك.. اليوم عليك أن تهتم أكثر بأسرار الحبيب ولا تنشرها، فهي تتعلق بكما وحدكما.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Get rid of some sensitivities and nudity, and makes you so reassuring and inclined to tranquility, and overcome the revolution that is within you .. Today you have to care more secrets of the beloved and do not publish, it concerns you alone.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "مهنياً: يبتسم لك الحظ ويأتيك بالأخبار السارّة شخص لم تتوقع يوماً أن يحمل إليك ما يزرع الأمل في نفسك",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Professionally: You are blessed with luck and sweet news by someone you never expected to carry to you what sows hope in yourself",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "اليوم هناك خبر سار للغاية، وربما يسعى البعض لتوريطك في أمور غير مهمة، فكن جاهزًا في الرد.. اليوم تنعم بالتناغم العاطفي، وتهتم لوضع جمالي وتتخذ قرارات شخصية مهمة.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today there is very good news, and some may try to involve you in things that are not important, so be ready to reply .. Today enjoy emotional harmony, and interested to develop aesthetic and make important personal decisions.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم احذر من بعض الوصوليين المستفدين من أوضاعك والذين يبتزّونك.. اليوم حاول أن تكن متعاونا ولا تتذمّر، وابتعد عن الانتقاد وتوجيه الملامة والانفعالات.. اليوم لا ترفض ما يطلبه منك الشريك، وخفّف من التعجرف واصغِ إلى الآخرين.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today, beware of some accessees who benefit from your situation and who are extorting you. Today try to be cooperative and do not complain. Stay away from criticism and guide blame and emotions. Today do not reject what your partner asks you, and relieve arrogance and listen to others.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "اليوم تبدو أكثر حماسة لعقد اتفاقات، وتعبر عن رأيك بحرية، اليوم ربما تشعر بخيبة أمل، بسبب عدم تجاوب الحبيب مع مشاعرك، وتجنّبه لك وابتعاده عنك.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => " Today you seem more enthusiastic to make agreements, express your opinion freely, today perhaps you feel disappointed, because the lover did not respond to your feelings, and you avoid him and keep him away from you.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "اليوم يسلط الضوء على بعض التغييرات في المجال المالي كما العائلي، ويحذر من بعض النزاعات، اليوم يمكنك أن تحلم بما تريد على الصعيد العاطفي، تتلقّى الدعوات كما كلمات الإعجاب.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today highlights some changes in the financial field as family, warns of some conflicts, today you can dream what you want on the emotional level, you receive invitations as admiration words.",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تلاحق هذا اليوم قضية سرية أو تتحقق من أمر وتحقّق في مشكلة تنغّص عليك عملك",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Pursue this day a secret issue or check out something and check out a problem that will cling to your business",
                ),

             Array
                (
                    "day" => "30",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "إذا كنت فعلاً تريد الوصول الى نتيجة حاسمة عليك التحرّك بفعاليّة، عليك مناقشة المواضيع الحساسة",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "If you really want to reach a decisive outcome you need to move effectively, you'll discuss sensitive topics",
                ),

        );
                    $this->horoscope_data[30]= 

     Array
        (
             Array
                (
                    "day" => "31",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "لا تتردّد في اتخاذ المبادرة تجاه الزملاء ولا تتوقّف طويلاً عند محطة متعثّرة إلاّ إذا كانت تعني لك كثيراً",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Feel free to take the initiative towards colleagues and do not stop long when the station stumbles unless it means much to you",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "تتقرّب من الحبيب أكثر وتكتشف الكثير من الأمور المشتركة التي تجمعك به فتزداد تعلقاً به",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => " Get closer to the beloved and discover a lot of common things that bring you to become more attached to him",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "الأشخاص في محيط العمل يتعاملون بإيجابية خاصة معك؛ فانتفع من هذه الفترة لمواجهة المشاكل الصعبة مع فريقك وبالتالي الاقتراب أكثر من هدفك.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "People in the working environment deal positively with you; you can benefit from this period to face the difficult problems with your team and thus get closer to your goal.",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "تختلط الشؤون العاطفية بالمصالح المادية، وقد تعالج قضية قسمة ممتلكات أو مستحقات اذا كنت تبحث في طلاق أو انفصال",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => " emotional affairs mingle with material interests, and may address the issue of the division of property or dues if you are looking for divorce or separation",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم تولد لديك حساسية معينة مع الزملاء، ويصعب عليك التفكير بما تريد، اليوم افتح باب الحوار مع الشريك، وقد يصلح لقاء بسيط مشكلات قديمة وعالقة بينكما.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today you have a certain sensitivity with colleagues, and it is difficult to think what you want, today open the door of dialogue with the partner, and may fit a simple meeting old problems and relationship between you.",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "الحكم على الشريك قد يكون خاطئاً أحياناً، خذ العبرة من التجارب السابقة واتعظ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "judging the partner may be wrong sometimes, take the lesson from past experiences and preach",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "اليوم ترتاح للتجاوب من قبل بعض الزملاء، وتتاح لك ظروف جيدة للقاء بعض الأصدقاء.. أنت تحسن التحكّم في عواطفك تجاه الشريك، وطيبة قلبك تكون محل تقدير من قبل الشريك، وتجذبه باتجاهك أكثر فأكثر.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today you are satisfied with the response of some colleagues, and you have good conditions to meet some friends .. You improve control of your emotions towards the partner, and your heart is appreciated by the partner, and attracted to you more and more.",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم تتلقى اتصالات متعددة لدعمك، حاول أن تفتح صفحة جديدة في حياتك.. اليوم هناك مناسبة اجتماعية، تتعرف من خلالها إلى شخص مثير للاهتمام وتبدأ معه علاقة جديدة.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today you receive multiple connections to support you, try to open a new page in your life .. Today there is a social event, you get to know an interesting person and start a new relationship with him.",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "سهّل لك هذا اليوم الاتصالات ويجعلك أكثر قدرة على الإقناع وكسب التأييد",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "This communication makes it easier for you today and makes you more persuasive and lobbying",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " كن جريئاً هذا اليوم وأظهر مقدرتك على تحمل المسوؤليات الجديدة لأنك قادر على إدارة أعمالك وأعمال الآخرين",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Be bold today and demonstrate your ability to assume new responsibilities because you are able to manage your business and the work of others",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " تعيش فرصة مميزة أو ترتبط بعلاقة جديدة، أو تقدم على خيارات نهائية بالنسبة إلى حياتك العاطفية",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You have a unique opportunity, a new relationship, or final choices for your emotional life",
                ),

             Array
                (
                    "day" => "31",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "ءل أيضًا إلى أي درجة ستأثر تلك المشاكل سلبيًا عليك شخصيًا. من الأفضل الانتظار والسماح بأن تجد المشاكل طريقها إلى الحل بمفردها.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Also to what degree will these problems negatively affect you personally. It is better to wait and let the problems find their way to the solution alone.",
                ),

        );
                     $this->horoscope_data[31]= 

     Array
        (
             Array
                (
                    "day" => "32",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " تصمد في وجه الأيام التي تتآمر معك وتحالفك، وتكون عواطفك جيّاشة وسحرك طاغٍياً بدون أدنى شك",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Resist in the face of the days that conspire with you and your alliance, and your emotions are hungry and enchanted without a doubt",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "إن العراقيل التي تنبأت بقدومها منذ فترة طويلة تظهر تدريجيًا وتتحول إلى واقع، وبات تفاديها مستحيلاً. واجه تلك التحديات في أسرع وقت، حتى وإن كانت المهمة صعبة. كلما تأخرت في ذلك، تراكمت العراقيل ووجب عليك مضاعفة المجهود لتجاوزها. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "The obstacles that have been foreseen for a long time are gradually emerging and becoming reality, and their avoidance is impossible. Meet those challenges as quickly as possible, even if the task is difficult. The longer you do, the more obstacles you have to overcome.",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " يجب ألا تفكر فقط في المزايا التي يجلبها لك الجديد المعارف، وحاول التفاعل أيضًا على المستوى العاطفي، وإلا فسوف تكون مدة الاستفادة والتناغم قصيرة. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "You should not only think about the benefits these knowledge brings you, and try to interact also at the emotional level, otherwise the duration of use and harmony will be short.",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "سوف تنفـُذ الحماسة التي تغمرك وتتخلل كل من تتعامل معه وتؤثر فيه، فتجدهم خير عون ومساعد لك في تنفيذ وتحقيق أهدافك التي ظننت أنها لن تتحقق. انتفع من تلك الطاقة الصادرة منك قبل أن يفوت الوقت ويمر دون ذلك",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You will implement the enthusiasm that engulfs you and permeates everyone you deal with and influence. You will find them helpful and helpful in implementing and achieving your goals, which I thought would not be achieved. Benefit from that energy before you lose time and pass without it",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "تركز اليوم على مساعدة إلى أحد الزملاء في العمل والكل يقدر وقوفك إلى جانبه ومساندته في ظرفه الدقيق",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today's focus is on helping a colleague at work and everyone appreciates your standing by his side and supporting him in his exact circumstance",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => " ترتفع فرص حل نزاع ما بين الأسرة أو الأصدقاء للأبد. سوف تمر بساعات لا تُنسى من التناغم والتضامن، وهذا قد يلطف الأوقات الصعبة. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "The chances of resolving a family or friends dispute forever rise. Will go through unforgettable hours of harmony and solidarity, and this may soften the difficult times.",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " اليوم يبشرك بانفراج أو بامتيازات تحصل عليها، وتكون الظروف مناسبة لمواهبك وتطلّعاتك، اليوم حياتك ستصبح أفضل، وتقرّر الخروج، وتلبي دعوات كثيرة تتلقاها.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today is proud of you or the privileges you get, and conditions are appropriate for your talents and aspirations, today your life will become better, and decide to go out, and meet the many calls you receive.",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم هناك تغيير كبير يحدث في مجال عملك، لذلك يجب عليك الوقاية والانتباه، الحب ما زال في دارك وأنت تعيش سعادة كاملة مع الشريك لم تعرفاها منذ مدة طويلة.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today there is a big change happening in your field, so you must prevent and pay attention, love is still in your heart and you live full happiness with the partner you have not known for a long time.",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "خجلك وتردّدك الدائم يحولان دون أن تتقرّب من الحبيب وتتعرّف إليه أكثر وتكتشف نفسيته",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Your shyness and constant hesitation prevent you from getting closer to the beloved and becoming more familiar with him and discovering his psychology",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "متّن الروابط التي تزعزعت وتخلص من الالتباسات والخلافات بينك وبين الشريك بسرعة",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => " board the links that are shaking and get rid of the ambiguities and differences between you and the partner quickly",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " لا تسمح بانعكاس عدم رضاك أمام الآخرين خاصة في العاملين بالمصالح العامة أو أمام رؤسائك، لأن هذه الفترة ليست بالوقت المناسب للدخول في مجادلات ونزاعات. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Do not allow your dissatisfaction to be reflected in front of others, especially in the public interest or in front of your superiors, because this is not the time to enter into disputes and conflicts.",
                ),

             Array
                (
                    "day" => "32",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "يـُتنبأ اقتراب وقوع مشاكل غير متوقعة وتحفيزك على حلها أصعب من المعتاد، فلا تيأس وأعثر على بدائل.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Predicts that unexpected problems are approaching and motivating you to solve them more difficult than usual. Do not despair and find alternatives.",
                ),

        );
     $this->horoscope_data[32]= 

     Array
        (
             Array
                (
                    "day" => "33",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "لكونك تتمتع بالحيوية أكثر، فبإمكانك القيام بكل ما ترغب فعله. مع ذلك، عليك أن تتساءل كيف سيكون الوضع بالنسبة لك اذا صارت الأمور أصعب من الآن. ",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "As you are more energetic, you can do whatever you want to do. However, you have to wonder how it will be for you if things get harder now.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "تتزايد المشاكل التي تصادفها في مسارك، ولذلك احرص على عدم نفاذ مواردك البدنية والنفسية.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "The problems you encounter are increasing, so make sure your physical and mental resources do not run out.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "الوقت مناسب جدًا لجميع العلاقات الشخصية، سواء كانت جديدة أو قديمة. سوف تجد عمليات التواصل مع من حولك ملهمة وغنية لأفكارك الخاصة.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "The time is very suitable for all personal relationships, whether new or old. You will find connections with those around you inspiring and rich for your own ideas.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "حالتك البدنية والذهنية في أحسن حال، لذا لديك تأثير إيجابي كبير على الآخرين الذين يلاحظون مدى إيجابيتك ولمعانك بكامل ثقة . ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Your physical and mental state is at best, so you have a very positive impact on others who notice your positive and your full confidence.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "لا تستشر الآخرين بما يتعلق بقراراتك العاطفية، وحاول أن تتصرف من تلقاء نفسك",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Do not consult others about your emotional decisions, and try to act on your own",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "بما أنك شخص اجتماعي بحق، وبما أنك ربما قد تكون قد أهملت واحد أو اثنين من معارفك مؤخرًا، يجب عليك الآن إصلاح هذه العلاقات مرة أخرى ومعاودة التواصل.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Since you are a real social person, and since you may have already neglected one or two of your acquaintances recently, you should now fix these relationships again and reconnect.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "تجنّب التوتر قدر المستطاع، فهذا اليوم يحمل إليك بعض المتاعب لكن ذلك يكون موقتاً",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => " Avoid stress as much as possible, this day carries you some trouble but it is temporary",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "تسهل الاتصالات قليلاً، ما يعني فترة دقيقة ملؤها النجاح والتقدم والإنجاز والتخلص من العراقيل والعقبات الكبيرة",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Facilitates communication a bit, which means a period of minutes filled with success, progress, achievement and the removal of obstacles and big obstacles",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "سوف يكون لديك سببًا جيدًا لكي تفرح، وتكون مستريحًا مع العالم من حولك وفي مزاج مناسب للاحتفال بهذا الإحساس.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You will have a good reason to rejoice, be comfortable with the world around you and in a mood to celebrate this sensation.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " كنوع من التغيير، حاول التخلي عن تلك الأنماط الاعتيادية واتخذ منهجًا جديدًا! القيام بتغيير حاسم سيكون المخرج للمواقف والمشاكل المستعصية. ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "As a kind of change, try to abandon those common patterns and take a new approach! Making a decisive change will be the way out of stalemate situations and problems.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "لا تندهش اذا شعرت اليوم بأنك متوعك الصحة، سيء المزاج ومشوش. يفضل أن ترى ما الخطب والاعتناء ببدنك. ستعيش فترات تملؤها الحيوية والارتخاء.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Do not be surprised if you feel today that you are sick, ill-tempered and confused. You would rather see what your speeches are and look after your body. Will live periods filled with vitality and relaxation.",
                ),

             Array
                (
                    "day" => "33",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " الآن يجب أن تستخدم قوتك بحكمة؛ لا تسمح لنفسك بأن تتعطل أو تتحول بسبب موضوعات صغيرة. لا تسيء استخدام طاقتك وقدرتك على الاحتمال بحيث لا يكون لها تأثي",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Now you must use your power wisely; do not allow yourself to be disrupted or transformed because of small subjects. Do not misuse your energy and potential so that you do not have an impact",
                ),

        );
      $this->horoscope_data[33]= 

     Array
        (
             Array
                (
                    "day" => "34",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تعيش فترة توازن بدني وذهني متناغم ولا ظهور لأي عائق خارجي في الأفق أيضًا، بل على النقيض، غالبية محيطك ودي معك وخدوم وحياتك تسير بأفضل حال. ",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "There is a harmonious balance of mind and physical equilibrium, and no external obstacle is in sight. On the contrary, the majority of your surroundings are friendly with you and your life is going well.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "تأنَ في تحديد المشاكل التي تمثل حقًا إعاقة في مسارك وتستحق التفكير فيها وتكريس طاقتك في مواجهتها. في هذا الشأن، إن إساءة تقدير الأشياء قد يؤدي بكل سهولة إلى مشاكل صحية. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Try to identify problems that really represent a disability in your path and deserve to think about them and devote your energies to confronting them. In this regard, misjudging things can easily lead to health problems.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " بما أنك تشعر بحالتك الجيدة، فإنك مهتم بصحة الآخرين، ولكن لا تنسى أن تعمل على تغيير عاداتك الحياتية غير الصحية. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Since you feel good, you are interested in the health of others, but do not forget to change your unhealthy lifestyle.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "صحتك الجسدية والعقلية في أحسن أحوالها، فلا تدع اللحظة تمر دون أن تسعى وراء أفكارك. سوف تكسب المؤيدين الذين يشاركوك في الأهداف ويمكنهم المضي قدمًا كفريق. هكذا تستطيع العمل اليوم بطريقة جيدة وتتقدم بشكل كبير لكي تصل في النهاية إلى أهدافك. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Your physical and mental health at its best, do not let the moment pass without seeking your thoughts. You will win supporters who share your goals and can move forward as a team. So you can work today in a good way and progress significantly to finally reach your goals.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "حاول أيضًا أن تكون منفتحًا تجاه أفكار الآخرين وربما تستطيع دمج هذه الأفكار في خططك الخاصة. سوف يدفعك هذا أكثر إلى الأمام. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Also try to be open to others' thoughts and perhaps you can incorporate these ideas into your own plans. This will push you further forward.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => " تأكد من الاحتفاظ بالتوازن بين الأخذ والعطاء حتى تتمكن من الاستفادة من الصداقات. يجب أن تكون مهتمًا بذاتك بعض الشيء للحفاظ على هذا التوازن. قد يكون التأمل هو المدخل الصحيح. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Make sure you keep the balance between giving and taking so you can make use of friendships. You should be a bit self-interested to maintain this balance. Meditation may be the right approach.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "عامل الثقة بينك وبين الشريك تعجز عن زعزعته كل المحاولات المغرضة، الشكوك حاضرة دائماً لكنك أقوى منها",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "The confidence factor between you and the partner is unable to shake him all tendentious attempts, doubts are always present but you are stronger than them",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " تعرف مغازلة جديدة او تستقطب شخصاً خلاّقاً أو تبدأ رومنسية مميزة ترافقك مدة طويلة تكون نهايتها سعيدة",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "You know a new flirt or attract a creative person or start a romantic romance that accompanies you for a long time to be a happy ending",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " جميع المقابلات، سواء مع زملاء العمل أو العائلة، سوف تكون مجدية للغاية. لكن لا تتمادى في ذلك، وفكر في هذا اليوم على أنه هدية واظهر امتنانك من خلال المعاملة اللطيفة لمن هم حولك. ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "All interviews, whether with coworkers or family, will be very useful. But do not stick to it, think of it as a gift and show your gratitude through the kindness of those around you.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "لأول مرة خانتك الأنماط السلوكية الاعتيادية الخاصة بك ووضعتك في مواقف حرجة. استراتيجية الحلول التي تنتهجها في المعتاد لا تحسن من الأمور، مهما حاولت مرارًا وتكرارًا.  ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "For the first time, you betrayed your usual behavioral patterns and put you in critical situations. Their strategy of solutions usually does not improve things, no matter how often you try.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " إذا تمكنت من تركيز هذه القوة والطاقة في تطوير مواردك الداخلية، فسوف تقوم بأكبر خطوة إلى الأمام في عملية تنمية شخصيتك واستيعابك للأمور.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "If you can focus this power and energy on developing your internal resources, you will take the biggest step forward in the process of developing your personality and understanding of things.",
                ),

             Array
                (
                    "day" => "34",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "على الرغم من أن كل شيء كان يسير بسلاسة من قبل، يقف شيء أو شخص ما في طريقك الآن. حدد مقدار القوة التي تحتاجها للتغلب على هذه العقبات أو ما إذا كان من الأفضل تجاهلها ببساطة.. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Although everything was going smoothly by, something or someone stands in your way now. Determine how much power you need to overcome these obstacles or whether it's best to ignore them simply.",
                ),

        );
       $this->horoscope_data[34]= 

     Array
        (
             Array
                (
                    "day" => "35",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " تحرر من المضايقات أيضًا التي عكرت حياتك منذ زمن. قم بإنهاء جميع الأعمال المُعلقة وتخلص من جميع الالتزامات القديمة التي لم تعد متعلقة بك. افسح المجال استعدادًا لفترات ستكون بها الأمور أقل سلاسة. ",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Free yourself from the harassment that has long plagued your life. Quit all outstanding work and get rid of all old commitments that no longer concern you. Make room for periods where things will be less smooth.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "ابحث عن الحلول للتناقضات وسوء التفاهم من خلال التواصل الهادف. يشكل التوتر خطرًا على صحتك، فابحث عن خط وسط بين الاسترخاء والنشاط. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Look for solutions to contradictions and misunderstandings through meaningful communication. Stress is a danger to your health, looking for a middle line between relaxation and activity.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "مهاراتك التنظيمية مطلوبة في العمل اليوم، ويمكنك جمع أفكار زملائك وبالتالي تتفوق. قد يكون لذلك تأثيرًا إيجابيًا على ثقتك بذاتك، كما سوف يلاحظ الأصدقاء أيضًا النزعة المتناغمة فيك حيث أنك قادر على جمع الشخصيات المختلفة معًا.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Your organizational skills are required in today's work, and you can gather your colleagues' ideas and thus excel. This may have a positive effect on your confidence in yourself, and friends will also notice the harmonious tendency in you as you are able to bring together the different characters together.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " لا تتعجب عندما يقترب منك من هم حولك ويبوحون لك بأفكارهم. لكن لا تكن مغرورًا – اشترك في المشروعات المختلفة لأنها قد تقدم لك الإلهام فيما يخص خططك الخاصة.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Do not be surprised when people around you approach you and give you their ideas. But do not be cocky - get involved in different projects because they might inspire you with your own plans.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "بما أنك تتواصل حاليًا بصورة جيدة مع من حولك، وتستطيع عرض خططك في جو من الإثارة، سوف يمكنك أيضًا اجتذاب تابعين متحمسين بسرعة. لا ترتاب فيهم بعد الآن وتقبل أية مساعدة يعرضونها عليك، ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Since you are currently communicating well with those around you, and can show your plans in an atmosphere of excitement, you will also be able to attract enthusiastic followers quickly. Do not doubt them anymore and accept any help they offer you,",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "اليوم أنت متفق أخيرًا مع ذاتك، وهذا يتضح للآخرين من خلال سلوكك. في العمل، سوف يطلب منك الزملاء النصيحة، وكذلك الحال في حياتك الخاصة.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today you finally agree with yourself, and this is evident to others through your behavior. At work, colleagues will ask you for advice, as well as in your own life.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " حاول الحفاظ على هدوئك الداخلي واستخدم هذا الوقت في الإعداد لأوقات أقل إيجابية قادمة.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Try to keep your inner calm and use this time to prepare for less positive times to come.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "وازن الأمور بعناية، وفكر في الأهداف التي تريد تحقيقها عن جد وتلك التي يجب التغاضي عنها. إذا استطعت تنفيذ ذلك، فسوف تجد أيضًا أن الحلول أصبحت أسهل. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Balance carefully, think about the goals you want to achieve and what you should overlook. If you can do that, you'll also find solutions easier.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "نتيجة الأمور التي سوف تحسمها في هذه المرحلة ستساعدك فيما بعد عندما لا يكون مجرى الأمور مناسب لك. مع ذلك، قد تكون بحاجة إلى تأكيد ذاتك، لكن من الأفضل القيام بذلك باعتدال.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "The outcome of the things that you will resolve at this stage will help you later when the course is not right for you. However, you may need to assert yourself, but it is best to do so moderately.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "يجب أن تكون أفكارك كبيرة هذا الأسبوع، فأنت تتحلى بكثير من الطاقة التي يجب أن توجهها بطريقة منتجة، وسوف تتفاجأ بمدى ما يمكنك فعله في وقت قصير.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Your thoughts need to be big this week, you have a lot of energy to direct in a productive way, and you'll be surprised at how much you can do in a short time.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "وجه طاقاتك بالدرجة الأولى باتجاه تطوير مواردك الداخلية، حتى تتجنب قدر الإمكان نوبات الغضب وتبادل الألفاظ العدوانية والبذيئة وأيضًا أي مواجهات قد تتطور إلى استخدام العنف البدني، لأن هذا السلوك لن يرجع عليك بأي منفعة. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Direct your energies primarily to develop your inner resources, so as to avoid as much as possible tantrums and the exchange of aggressive and obscene words and also any confrontations that may develop into physical violence, because this behavior will not benefit you.",
                ),

             Array
                (
                    "day" => "35",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "فالمواجهة المتعمدة في العمل أو في حياتك الشخصية قد تكون مناسبة، ولكن يجب أن تتقدم بحذر وأن تدرس مميزات وعيوب هذه الجهود، وسوف تكتشف قريبًا أنه من المطلوب أن تأخذ خطوة للوراء في بعض الأحيان للتقدم إلى الأمام. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "A deliberate confrontation at work or in your personal life may be appropriate, but you must proceed with caution and study the advantages and disadvantages of these efforts. You will soon discover that you need to take a step back sometimes to move forward.",
                ),

        );
        $this->horoscope_data[35]= 

     Array
        (
             Array
                (
                    "day" => "36",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "كل ما أنت جزء منه ينتهي على أكمل وجه ولا أهمية للمشكلات التي تواجهها. احرص في هذه الفترة على عدم استئناف الأمور منذ البداية. بالعكس، تخلص مما يشغلك يوميًا ولا يريحك منذ زمن.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Everything you are part of ends up perfectly and is not important to the problems you face. In this period, be careful not to resume things from the start. On the contrary, get rid of what works you daily and does not comfort you long ago.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم لا تبدو قادرًا على إنجاز أي شيء، ولكن لا تدع ذلك يرجعك كثيرًا للخلف. إذا استمريت في العمل بثبات، سوف تكتشف النجاح مرة أخرى. الوضع مشابه في حياتك الخاصة، مع شريك حياتك وأيضًا مع الأصدقاء. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today you do not seem to be able to do anything, but do not let that get you back too much. If you continue to work steadily, you will find success again. The situation is similar in your own life, with your partner and also with friends.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " سوف تكون معظم أفكارك مقبولة في الوقت الحالي بالنسبة للأغلبية وذلك لأن الآخرين يقبلون أفكارك بطبيعة الحال. استخدم نفوذك في تحقيق أهدافك، فإذا كانت أفكارك ومفاهيمك ثابتة وغير قابلة للتغيير، فسوف تجد القبول لدى الآخرين",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Most of your thoughts will be acceptable right now for the majority because others will naturally accept your ideas. Use your power to achieve your goals. If your ideas and concepts are constant and unchangeable, you will find acceptance in others",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "كل شيء سهل في الوقت الحالي وأنت تستمتع حقًا بالأمور التي تقوم بها. سوف تترك أيضًا ورائك أثر من الجاذبية الإيجابية. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Everything is easy right now and you really enjoy things you do. You will also leave behind you the impact of positive gravity.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "سوف يدعمك الأشخاص الأقرب لك، ولكن لا تغفل عن أهدافك وتحلى بالمثابرة دائمًا. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "People closest to you will support you, but do not overlook your goals and persevere.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => " اليوم يبدو أنه ليس هناك مشكلة لا تستطيع حلها، وتسمح لك حالتك المزاجية الجيدة وتفاؤلك بالنظر بالثقة إلى المستقبل. فقط عليك ترك التوتر اليومي ورائك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today there seems to be no problem you can not solve, and your good mood and optimism allow you to look confidently into the future. Just leave you the daily stress behind you.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "أنت الآن متفق مع ذاتك بشكل كامل، وتشعر بالتناغم التام في عملك وفي حياتك الشخصية أيضًا. يؤثر ذلك على الآخرين لما لك من علاقات قوية مع شريك حياتك والعائلة، مع وجود توازن جيد وصحي بين الأخذ والعطاء.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You are now fully in agreement with yourself, and feel full harmony in your work and in your personal life as well. This affects others because you have strong relationships with your partner and family, with a good balance and health-giving.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "لا يبدو أن جبال المشكلات والاضطرابات اليومية في طريقها إلى التلاشي. كن حازمًا وحاول استعادة رأيك فيما هو مهم، وإلا قد تعاني من انتكاسات دائمة.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "The mountains of problems and daily troubles do not seem to be disappearing. Be firm and try to regain your mind of what is important, otherwise you may suffer permanent setbacks.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "اذا وجدت شكوك أو ظنون غير مؤكدة في حياتك، فهذا هو الوقت المناسب أن تطمئن نفسك وتتخلص منها مما يوفر لك بنية وإطار عمل أكثر استقرارًا. في الغالب، لن تتصادم بالكثير من العوائق في الوقت الحالي، وسوف يظهر الآخرين احترامهم وتقديرهم لأرائك.  ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "If you find uncertainties or uncertainties in your life, this is the right time to reassure yourself and get rid of them, giving you a more stable structure and framework. Often, you will not encounter many obstacles at the moment, and others will show respect for and appreciation of your opinions.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "تأكد من عدم خوضك في المناقشات، فلديك مشكلة في التعامل مع الردود، وسوف تصعد الدماء إلى وجهك الذي سوف تكسيه حمرة الغضب",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Make sure you do not go into discussions, you have a problem dealing with the responses, and the blood will rise to your face, which will cover the rage of anger",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " ابحث عن متنفس من أي نوع؛ يمكنك ممارسة الجري أو ركوب الدراجات، أو يمكنك حل لغز أو قراءة كتاب جيد. إذا تخلصت من التوتر أو استرحت، سوف ترى أنه فور أن تفكر في شيء آخر، سوف يسهل عليك التصرف بهدوء في العديد من المواقف في حياتك. لا تدع المشكلات أو النزاعات تتطور من البداية. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You can practice running or cycling, or you can solve a puzzle or read a good book. If you get rid of tension or rest, you will see that once you think about something else, it will make it easier for you to act calmly in many situations in your life. Do not let problems or conflicts develop from the start.",
                ),

             Array
                (
                    "day" => "36",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "في الوقت الحالي، أنت معرض لخطر إضاعة قوتك وطاقتك، فأنت تحاول تحقيق مرادك بطريقة عدوانية وعنيدة وهذا يجعلك تتوتر من لا شيء. لذلك، يجب أن تتوقف لإعادة التفكير في ما هو مهم بالنسبة لك وما هو دون ذلك. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "At the moment, you are at risk of wasting your strength and energy, you are trying to achieve your goal in a hostile and stubborn manner and this makes you tense from nothing. Therefore, you must stop to rethink what is important to you and what is below it.",
                ),

        );
         $this->horoscope_data[36]= 

     Array
        (
             Array
                (
                    "day" => "37",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " توخ الحذر حتى لا تدخل في مشروعات كثيرة مختلفة وترهق نفسك. إذا حدث ذلك، فسوف تواجه الكثير من المهام غير التامة التي قد تصبح التزامًا عليك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Be careful not to enter into many different projects and exhaust yourself. If this happens, you will encounter a lot of unfinished tasks that may become your obligation.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "فوق كل ذلك، يجب أن تهتم بصحتك لوجود مخاطر الإصابة بأمراض حادة.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Above all, you should be mindful of your health because of the risk of acute illness.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "سيكون لحيويتك المتزايدة وثقتك بنفسك المعدلة آثارًا إيجابية على اجتهادك أيضًا. إنه وقت جيد للبدء في مهام جديدة وذلك لأنك تستطيع الأداء بقوة بمفردك أو من خلال فريق عمل.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Your increased vitality and confident self-esteem will also have positive effects on your diligence. It's a good time to start new tasks because you can perform well on your own or through a team.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " إذا وجدت نفسك، عكس ما هو متوقع، غير قادر على تحقيق أهدافك، يجب إعادة دراسة الخطط واستخدام إمكاناتك في المشروعات المختلفة. إنه وقت جيد لكي تتوسع في مجال عملك لأنك سوف تنجح في جميع الأحوال. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "If you find yourself, contrary to what is expected, unable to achieve your goals, you must re-examine the plans and use your potential in different projects. It's a good time to expand your business because you will succeed anyway.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "أنت حازم وقادر أخيرًا على تنفيذ رغباتك التي احتفظت بها سرًا لمدة طويلة. سوف تنجح إذا استجمعت الشجاعة الكافية لتحويل أفكارك إلى أفعال، وعندئذ، يمكنك تشكيل حياتك بصورة أكثر إيجابية على المدى البعيد. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You are firm and finally able to carry out your desires that you have kept secret for a long time. You will succeed if you have the courage to turn your thoughts into actions, and then you can shape your life more positively in the long run.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "في الغالب لن تصادفك أية عقبات من الآخرين، وسوف تتعرف على أشخاص جدد بسرعة وبأقل مجهود. إذا استخدمت هذه المعرفة، فسوف تتحقق الصداقات المجدية على المدى البعيد.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Often you will not encounter any obstacles from others, and you will get to know new people quickly and with minimal effort. If you use this knowledge, meaningful friendships will be realized in the long term.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "سوف تتعرض للكثير من الأسئلة اليوم، وسوف يُطلب منك النصح ويتطلب ذلك أن تحافظ على السلام في موضوعات حساسة. لكن لا تدع الغرور يصيبك نتيجة لهذه الثقة الموضوعة فيك، وإلا فإنك سوف تسيء استخدام هذه الصراحة التي تراها فيمن حولك في أغراض أنانية. استخدم نفوذك في مساعدة الآخرين، فربما تكسب قلب شخص آخر. ",

                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You will be asked a lot of questions today and will ask you for advice and require that you keep peace in sensitive subjects. But do not let vanity get you as a result of this trust in you, otherwise you will abuse the frankness you see around you for selfish purposes. Use your brain to help others, you may gain someone else's heart.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "عن قريب، ستواجه تحديات وعراقيل صعبة. قد يتواجد من يعمل ضدك أو يسبب مضايقات بتواجده بالمكان، وذلك سعيًا للإخلال بتوازنك. بالتالي يجب الأخذ بعين الاعتبار أقل تأثير سلبي قد يكون لتلك العوائق العابرة على مسار حياتك في حالة ما اذا قررت تجاهلها بكل بساطة. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Soon, you will face difficult challenges and obstacles. There may be someone working against you or causing harassment by being there, in order to disturb your balance. Therefore, you should consider the least negative impact that these obstacles may have on your life path if you decide to ignore them simply.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "سوف تجد القياس المناسب لكل شيء، ويرجع هذا إلى السيادة الكبيرة التي تشعر بها هذا الأسبوع. تنجز الأعمال بطريقة مستريحة وبأيادي ثابتة وتستطيع إنجاز أصعب المهام بنجاح",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You will find the right measure for everything, due to the great sovereignty you feel this week. Doing business in a relaxed and steady way can accomplish the most difficult tasks successfully",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " لتجنب إضاعة طاقتك، يجب أن تكون معتدلاً، وهذا ينطبق أيضًا على جميع الأنشطة الجسمانية، فأنت مهمل للغاية وغالبًا ما تأخذ أكثر من طاقتك. بالإضافة إلى ذلك، أنت معرض لخطر الحوادث في الوقت الحالي. ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "To avoid wasting your energy, you must be moderate, and this also applies to all physical activities, you are too neglected and often take over your energy. In addition, you are at risk of accidents right now.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "الانفجارات العاطفية العفوية غير نادرة في الوقت الحالي. تميل إلى التصرفات المندفعة مرة أخرى في الوقت الحالي، وهذا سوف يؤدي إلى مشكلات كبيرة في الكثير من المواقف. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Spontaneous emotional blasts are not rare at this time. Tend to act again at the moment, and this will lead to significant problems in many situations.",
                ),

             Array
                (
                    "day" => "37",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "تجد سهولة في التعامل مع حبيبك كما تلقى منه كل الدعم المعنوي وغيره",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "You find it easy to deal with your lover as well as receive all moral and other support",
                ),

        );
          $this->horoscope_data[37]= 

     Array
        (
             Array
                (
                    "day" => "38",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "مع طاقتك وحماسك اللذين اكتشفتهما حديثًا، الوقت الآن جيد للبدء في اكتشاف فرص جديدة قد تؤدي إلى تجارب مثيرة لا تُنسى. ",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "With your newly discovered energy and enthusiasm, the time is now right to start exploring new opportunities that may lead to exciting and memorable experiences.",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "على الرغم من شعورك بالقوة غير الاعتيادية، تشعر أيضًا بالتوتر لأن الكثير من الأشخاص يتحدونك بالعديد من الطلبات. ننصحك بأن تريهم إمكاناتك، ففي أثناء الجدال، لا تستسلم لرغبتك في إثبات ذاتك ولكن يجب أن تستهدف الوصول إلى حل وسط، وإلا قد تضطر إلى التراجع أو تكوين أعداء. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Although you feel unusual, you also feel tense because many people challenge you with many requests. When you argue, do not give in to wanting to prove yourself, but you should aim to reach a compromise, otherwise you may have to retreat or create enemies.",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "تتواصل بشكل أليف مع الآخرين وتنفّذ رغباتك، أو تتلقى ما يسعدك من معلومات وأخبار",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Communicate with others and fulfill your desires, or receive your information and news",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "لا يجب أن تقلق بشأن تحقيق رغباتك، فالتأثير الإيجابي سوف يحيطك بهالة من الإقناع. يجب أن تفكر في مناقشة كل ما يمثل موضوعًا شائكًا بالنسبة لك، ولا يهم إذا شمل الأمر حياتك الشخصية أو المهنية.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You do not have to worry about achieving your desires. The positive effect will surround you with a halo of persuasion. You should consider discussing everything that is a rough topic for you, and it does not matter if it involves your personal or professional life.",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " ربما يجب أن تحاول تحفيز الآخرين، وإن لم ينجح ذلك، يجب أن تحافظ على هدوئك، وهذا قد يكون عملاً مرهقًا للغاية في بعض الأوقات. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You may have to try to motivate others, and if that does not work, you should keep calm, and this can be a very stressful job at times.",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "أنت في وضع مريح ومتوازن وسوف يفيدك ذلك على المستويين الشخصي والمهني، فأنت لست بحاجة إلى أن تكون مقنعًا لكي تلهم الآخرين بأفكارك وخططك",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "You are in a comfortable and balanced position that will benefit you both personally and professionally. You do not need to be convincing to inspire others with your thoughts and plans.",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "علاقاتك الشخصية المتداخلة تسير بشكل جيد، فأنت ضيف مقدر وعادةً ما تثير الجلبة بإيجابيتك واتزانك. سوف تساعدك ثقتك المتزايدة بنفسك في تأسيس روابط هامة مع شخصيات جذابة",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Your interpersonal relationships are going well, you are a valued guest and usually provoke your fuss and your balance. Your growing confidence in yourself will help you establish important links with attractive characters",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "ذا الأسبوع، لديك شعور أن الحياة تحمل الكثير من التحديات الجديدة لك، ويبدو أنك مضطر لإثبات ذاتك طوال الوقت، وهذا قد يكون مجهدًا للغاية ومثيرًا للأعصاب وسوف تكون متوترًا معظم الوقت. تأكد من أنك تحافظ على أعصابك، وتحاشى أن تفقدها أمام المقربين منك",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "This week, you have a feeling that life carries a lot of new challenges for you, and you seem compelled to prove yourself all the time, and this may be very stressful and nerve-wracking and will be tense most of the time. Make sure you keep your temper, and avoid losing it to those close to you",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "فإذا كنت غير مرتبط، تصبح لديك جاذبية مغناطيسية. أما إن كنت مرتبطًا، فتستطيع التطلع إلى لحظات رومانسية حميمية.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "If you are not connected, you have magnetic attraction. If you are connected, you can look forward to intimate romantic moments.",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "تكثر المساعي لتمتين أواصر العلاقة والمصالحة، من خلال لقاءات رومانسية أو جلسات حميمة دافئة",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "there are many endeavors to strengthen relationships and reconciliation, through romantic encounters or warm intimate sessions",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "أنت مدعو الى الاهتمام بالشريك وتجنّب النزاعات والدعاوى القضائية والأسفار",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You are invited to take care of the partner and avoid disputes, lawsuits and travel",
                ),

             Array
                (
                    "day" => "38",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "يفرض عليك هذا اليوم بعض التأني في الكلام والشرح الواضح والمقنع",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "This day forces you to take some time to speak clearly and convincingly",
                ),

        );
           $this->horoscope_data[38]= 

     Array
        (
             Array
                (
                    "day" => "39",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "أنت الآن في وضع جيد يسمح لك باكتشاف إمكاناتك القصوى، وهذا يعني أنك أقوى وأكثر ثقة من المعتاد. استخدم هذا لمصلحتك، ولكن اهتم أيضًا بتواصلك مع الآخرين. فقد يحدث فجأة أن تدهس الناس أمامك أو أن تصبح فضوليًا أكثر مما ينبغي بسبب طاقتك",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You are now in a good position to discover your maximum potential, which means you are stronger and more confident than usual. Use this to your advantage, but also take care of your communication with others. It may suddenly happen that people are trampling on you or becoming too curious because of your energy"),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "يخفّف هذا اليوم النمط ويجعلك متكّلاً على الآخرين في بعض الواجبات والمسؤوليات",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Professionally: This day relieves style and makes you dependent on others for some duties and responsibilities",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " لا تحاسب الحبيب على كل كلامه فتصرفاتك معه لم تكن أفضل في المدة الأخيرة",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Do not hold the beloved on all his words and your actions with him were not better in the last period",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " فسوف تكون لديك القدرة على إثبات ذاتك وسوف يتبعك الآخرين. يجب أن تكون لديك إصرار دائمًا، ولكن لا تترك بعض الأمور تسيطر عليك.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You will have the ability to prove yourself and others will follow you. You must always be persistent, but do not let some things dominate you.",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "الأنباء غير السارة أولاً: سوف تشعر في أغلب الأمر بالمرارة في حلقك، بلاغيًا وفعليًا، وإذا لم تستمع إلى إشارات جسدك خلال ممارسة الأنشطة الرياضية، فقد تتعرض لمخاطر الإصابة. قد تصدر عنك بعض الكلمات القاسية بسهولة، فأنت متحمس لاستخدام هذه الطاقة الزائدة بالإضافة إلى نزعتك السيادية. لكن الإهدار المتعمد للطاقة الجسدية والعاطفية ليس هو الحل،",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "The bad news First, you will feel bitter in your throat, both rhetorically and physically. If you do not hear your body signals during exercise, you may be at risk. Some harsh words may come out easily. You are excited to use this extra energy in addition to your sovereign judgment. But the deliberate waste of physical and emotional energy is not the solution,",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => " رؤساؤك وزملاؤك والذي يصعب التعامل معهم سوف يكونوا على استعداد لسماع مقترحاتك. لقد حان وقت الاقتراب من المشروعات الجديدة والتخطيط الإستراتيجي للمستقبل، وبهذه الطريقة سوف توفر لمواجهة أوقات أصعب. تشعر أنك بصحة جيدة، فاستغل هذه الفرصة لتخزين بعض الطاقة. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Your heads and colleagues, who are difficult to deal with, will be willing to hear your suggestions. It is time to approach new projects and strategic planning for the future, and in this way it will provide for more difficult times. You feel good, so take advantage of this opportunity to store some energy.",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "يشعر رؤساؤك بالكثير من الحماس تجاه أعمالك وأفكارك، فالكثير من الأشخاص في مجالك المهني والخاص يسعون إلى شركتك وذلك لإعجابهم بروحك المتزنة والمبدعة. . ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Your bosses feel a lot of enthusiasm for your work and your ideas. Many people in your professional and private sector are looking for your company to admire your balanced and creative spirit. .",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " يجب أن تتعلم كيفية الحذر وضبط النفس. حان الوقت لكي تكافئ نفسك بنهاية أسبوع هادئة ومريحة، فاستخدم الوقت في إعادة ضبط خططك وتنسيقها مع شريكك وعائلتك. ",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "You must learn how to be careful and restrained. It's time to reward yourself with a quiet, comfortable weekend, use time to reset and coordinate your plans with your partner and family.",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => ". أنت أيضًا شخص يسعى إليه الآخرون من الزملاء للكفاءة والأمان الذي يشع منك. إذا تقدمت لشيء ما، فسوف تحصل عليه بسبب هذه الكاريزما. حتى في حياتك الخاصة، تبدو هذه الذبذبات المتناغمة واضحة",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You are also a person sought by other colleagues for the efficiency and safety that radiates from you. If you progress to something, you will get it because of this charisma. Even in your own life, these harmonious oscillations seem obvious.",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "قد تتراجع الحظوظ عن دعمك، بعد مراحل طوال من الأبواب المفتوحة، وتخضع لضغط كبير وتواجه بعض العراقيل",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "The stakes may drop from your support, after the entire stages of the doors are open, subject to great pressure and face some obstacles",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "تكون الطموحات كثيرة لكن التخوف من عرقلة يبقى حاضراً، وخصوصاً أن مارس والشمس يعاكسان القمر في برجك",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Many ambitions are but the apprehensions of obstruction remain present, especially since Mars and Sun reflect the moon in your turret",
                ),

             Array
                (
                    "day" => "39",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "يجب أن تتخذ مزيدا من الحذر لحرق الطاقة الهائلة فى الجسدك مع ممارسة التمارين الرياضية، ثم يصبح جسدك قادر على اخذ قدر كافى من الراحة.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "You need to be extra careful to burn your body's massive energy with exercise, and then your body will be able to take enough rest.",
                ),

        );
            $this->horoscope_data[39]= 

     Array
        (
             Array
                (
                    "day" => "40",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " في القريب العاجل، يجب أن تستمع أكثر لإحساسك الداخلي، لأنه في ذلك الوقت لن تهتم كثيرًا بمثل هذه المشكلات. بل قد تكتشف جانبًا جديدًا في شخصيتك فيما يخص أمور الحب، والذي سوف يحوز على إعجاب شريك حياتك أو المعجبين كثيرًا بطبيعة الحال. ",

                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "In the near future, you should listen more to your inner sense, because at that time you will not care much about such problems. You may even discover a new aspect of your personality about things of love, which will naturally impress your partner or fans of course.",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => " يشكل هذا اليوم محطة مهمة في حياتك العاطفية، وتتخلص من جدال حول قصة عاطفية أو حتى مالية",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "This is an important day in your emotional life, and you get rid of a controversy about an emotional or even financial story",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم اتصالاتك جيدة، وتنجح على الصعيد الاجتماعي والمهني.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today your contacts are good, and succeed on the social and professional level .",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " تتغلب اليوم على الكثير من الضغوط وتتخذ القرار الأمثل بغية التخلص مما يزعج الشريك",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you overcome a lot of pressure and make the best decision to get rid of what bothers the partner",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " يشير هذا اليوم إلى فترة مليئة بالحركة والسفر واللقاءات، وقد تضطر إلى الاهتمام بشؤون تشغلك عن المشاريع الجديدة",

                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "This day marks a period full of traffic, travel and meetings, and you may have to pay attention to your business for new projects",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "بعض الانفعالات والمواقف السلبيّة تفسد الأجواء الجميلة وتثير الحساسيات بينك وبين الشريك",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Some of the negative emotions and attitudes spoil the beautiful atmosphere and sensitivities between you and the partner",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => " تحاول أن تجد الحلول للمشكلات من دون تشنّج، المهم أن تنفتح على المحيط وأن تعبّر عن رغباتك وطريقة تفكيرك بلا تحفظ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Trying to find solutions to problems without spasm, it is important to open up to the ocean and express your desires and way of thinking unreservedly",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "يوفّر لك هذا اليوم صداقات حلوة ولقاءات وتغييراً يطرأ ويدعوك إلى المجازفة فتقدم بلا خوف",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "This day gives you sweet friendships, encounters, changes, and invites you to risk without fear",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "أنت تحمل حملاً ثقيلاً من المشكلات؛ ابدأ بتخفيف الأثقال عن كاهلك، وإلا فسوف تستمر المصاعب في الزيادة",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You carry a heavy load of problems; start by loosening your weight, otherwise the difficulties will increase",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "كُنْ واقعياً واطلب الإثباتات والوثائق والبراهين، لكن لا تتشبث برأيك ولا تعاند لمجرد العناد. قد تبحث قضية مالية أو عقارية أو تفاوض بشأن بعض الممتلكات",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Be realistic and ask for proofs, documents and proofs, but do not cling to your opinion and do not hesitate to just stubbornness. May consider a financial or real estate issue or negotiate some property",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "ليوم تلاحق قضية سرية، أو تتحقق من أمر، وتحقّق في مشكلة تنغّص عليك عملك.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today pursue a secret issue, or verify something, and investigate a problem that engulfs your business.",
                ),

             Array
                (
                    "day" => "40",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم هو يوم ملهم بالنسبة لك، يجب عليك سرعة التفكير ولكن عليك أن تدوين كل ما يأتى فى عقلك من الأفكار",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today is an inspiring day for you, you should speed thinking but you have to write down everything that comes into your mind of ideas",
                ),

        );
             $this->horoscope_data[40]= 

     Array
        (
             Array
                (
                    "day" => "41",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تشعر بالقوّة على مواجهة الظروف الطارئة وتتمتّع بإرادة قويّة حيوية عظيمة تؤهّلك للمنافسة والنجاح والتفوّق",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "You feel empowered to cope with emergencies and have a strong and vital will to qualify for competition, success and excellence",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم يسهل أمامك الاتصالات، وتكن أكثر تناغمًا مع المحيط.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today it is easier for you to communicate, and be more in tune with the ocean .",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "اليوم لا تغار من نجاح الحبيب وتألقه في مجال عمله، بل شجعه على المزيد فهو نصفك الآخر.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today do not get jealous of the success of the beloved and his brilliance in the field of work, but encouraged him more is the other half.",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "مهنياً: توقعاتك والمحاذير التي كنت تخشاها، يبدو أنها ستواجهك في الأيام المقبلة لكنّك تتخطى المرحلة بأقلّ ضرر ممكن",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Your expectations and warnings that you are afraid of, it seems that they will face you in the coming days but you go beyond the stage with minimal damage",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "الأجواء لا تساعدك اليوم على التعاطي مع الشريك كما هي العادة ما يثير استغرابه نوعاً ما",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "The atmosphere does not help you today to deal with the partner as is usually somewhat surprising",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "مهنياً: تتلقى الأجوبة التي طالما انتظرتها وتحصل على فرصة ثمينة لاظهار كفاءة وجدارة",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "You receive answers that you have long waited for and you get a valuable opportunity to show competence and merit",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "لهذا اليوم التأثير الإيجابي في أوضاعك المالية أو يتحدث عن تغييرات تحصل في هذا الإطار ولوعلى المدى البعيد",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today has a positive impact on your financial situation or talks about changes you get in this and for the long term",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "علاقتك العاطفية تكون مميزة، السفر مع الشريك مشروعكما المفضل لتجديد شهر العسل",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Your emotional relationship is unique, traveling with your partner as your favorite honeymoon renewal",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => ". فكل يوم يمر هو يوم مفقود من العمر. لقد حان الوقت لمواجهة الأمور مباشرةً دون تأجيل",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => " Every passing day is a lost day. It is time to face things directly without delay",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "لقد وصلت إلى حائط سد في الوقت الحالي، ويبدو أن لا شيء يحرز تقدمًا وأنت على وشك الاستسلام. اعتبر مثل هذه الأوقات اختبارًا لقوة إرادتك، وسوف يتضح لك قريبًا أهمية المضي قدمًا في خططك",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "You've reached a dam wall right now, and nothing seems to be progressing and you're about to surrender. Consider these times as a test of your willpower, and you will soon realize the importance of moving forward with your plans",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " اليوم تعيش فرصة مميزة أو ترتبط بعلاقة جديدة، أو تقدم على خيارات نهائية بالنسبة إلى حياتك العاطفية.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today you live a unique opportunity, a new relationship, or a final choice for your emotional life.",
                ),

             Array
                (
                    "day" => "41",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "اليوم إذا كنت فعلاً تريد الوصول لنتيجة حاسمة عليك التحرّك بفعاليّة، ومناقشة المواضيع الحساسة.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today if you really want to reach a decisive result you have to move effectively, and discuss sensitive topics .",
                ),

        );
              $this->horoscope_data[41]= 

     Array
        (
             Array
                (
                    "day" => "42",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "بالإمكان حماية استقرار العلاقة شرط التعاطي مع الظروف والمستجدّات بتعقل ورويّة",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "it is possible to protect the stability of the relationship, provided that the conditions and developments are dealt with rationally and rationally",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم لا تخجل من طلب المساعدة من الزملاء في حال شعورك بكثرة الضغوط عليك.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today do not be shy from asking for help from colleagues in case you feel a lot of pressure on you .",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "يكسبك إحداث بعض التغيير في محيط عملك حماسة أكبر لإنجاز مهماتك",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Making some change in your business environment gives you greater enthusiasm for accomplishing your tasks",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم تركز على قضايا مادية ومالية، وتستحوذ على كامل اهتماماتك في العمل، وتتوصل إلى نتائج جيدة لها.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you focus on material and financial issues, take full advantage of your business interests, and achieve good results for them.",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "قد تتراجع العلاقة اليوم بسبب بعض التأخير في اتخاذ القرارات المناسبة بالنسبة إلى المستقبل",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today, the relationship may be declining due to some delay in taking appropriate decisions for the future",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "لا تؤثر فيك الضغوط فأنت تتمتع بحماية تعزّز الثقة بالنفس وتقوّي المعنويات، وتكون أنت مصدر الدّعم والثبات في هذه العلاقة",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Stress does not affect you. You enjoy protection that promotes self-confidence and strengthens morale, and you are the source of support and consistency in this relationship",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج الميزان ",
                    "number" => "7",
                    "significance" => "الحوافز كثيرة والمحيط داعم، تقدم على تحسينات وتعديلات وترتيبات كثيرة وسفر",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Many incentives are ocean-supportive, offering improvements, modifications, many arrangements and travel",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "تسعى إلى نيل رضى إحداهن أو تشعر بعدم الانتماء أو بصعوبة التكيّف مع الأجواء. يدعوك الحدس إلى تغييرٍ ما يحصل ومواكبته بذكاء وليونة بعيداً عن الاعتراضات التي لا تأتيك بنتيجة",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Seeking one's satisfaction or feeling disaffected or difficult to adapt to the atmosphere. Intuition invites you to change what is happening and keep it smart and soft away from objections that do not bring you a result",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " يجب أن تصل إلى استراتيجية في التعامل مع التحديات المهنية والخاصة بدون إضاعة الكثير من الطاقة في نفس الوقت. لكن لا تضيع الكثير من الوقت في التفكير. ",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You must reach a strategy in dealing with professional and special challenges without wasting too much energy at the same time. But do not waste too much time thinking.",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "اليوم كن جريئًا، وأظهر مقدرتك على تحمل المسوؤليات الجديدة، فأنت قادر على إدارة أعمالك وأعمال الآخرين.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today be bold, show your ability to assume new responsibilities, you are able to manage your business and the work of others .",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "أنت تبحث عن المصلحة فى المقام الأول، فلا داعى من الدخول فى علاقة لم تعرف المشاعر طريقًا إليها، وعليك أن تتفهم ذلك منذ البداية حتى لا تندم لاحقًا.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You are looking for the interest in the first place, so you do not have to enter into a relationship that did not know the feelings way to it, and you should understand from the beginning so as not to regret later.",
                ),

             Array
                (
                    "day" => "42",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " اليوم تتطوّر صداقة ما إلى علاقة حب وتقرّب المسافة بين الأحبّاء نظراً إلى خلو الأجواء من المشاعر السلبيّة.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today, a friendship develops into a love relationship and the distance between loved ones is closer to the absence of negative emotions.",
                ),

        );
               $this->horoscope_data[42]= 

     Array
        (
             Array
                (
                    "day" => "43",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تسير الأمور مع الحبيب بشكل رائع وذلك يعود بشكل رئيسي إلى مزاجك الرصين وطباعك المرنة.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Things are going well with your lover, mainly due to your sober mood and flexible print.",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "لبرج الثور",
                    "number" => "2",
                    "significance" => "اليوم تتقرّب من الحبيب، وتكتشف الكثير من الأمور المشتركة التي تجمعك به.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today you get close to the beloved, and discover a lot of common things that brings you.",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => "تتجنّب مناقشة بعض الأمور الحساسة مع الحبيب ما يشعره بغضب كبير",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Avoid discussing some sensitive things with the beloved, which makes him feel very angry",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم تختلط الشؤون العاطفية بالمصالح المادية، وقد تعالج قضية قسمة ممتلكات أو مستحقات إذا كنت تبحث في طلاق أو انفصال.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today, emotional affairs are intertwined with material interests, and may address the issue of the division of property or receivables if you are looking at divorce or separation.",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "تصغي إلى كلام إيجابي وتتلقى عرضاً جيداً يعيد إلى قلبك الاطمئنان، وتتاح لك فرصة توقيع عقد جيد وطويل الأمد",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Listen to positive words and receive a good offer that brings back to your heart reassurance, and you have the opportunity to sign a good contract and long-term",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "تكثر أحلامك هذا اليوم وتسعى إلى تحقيق الكثير من الطموحات العاطفية",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Your dreams come true today and strive to achieve a lot of emotional ambitions",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => "يخف الضغط ويتحدث هذا اليوم عن تجارب جديدة مشوقة جداً وعن سفر محتمل مع مجموعة من الناس تستعذب وجودهم",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "The pressure subsides and this day speaks of very interesting new experiences and potential travel with a group of people who are thriving.",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "حذار التيّارات السلبية التي تدفعك إلى القيام بأعمال طائشة تثير غضب الشريك",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Beware of negative currents that lead you to do stray actions that infuriate your partner",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " خجلك وتردّدك الدائم يحولان دون أن تتقرّب من الحبيب وتتعرّف إليه أكثر وتكتشف نفسيته",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Your shyness and constant hesitation prevent you from getting closer to the beloved and becoming more familiar with him and discovering his psychology",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => " اليوم حاول أن تقوي الروابط التي تزعزعت، وتخلص من الالتباسات والخلافات بينك وبين الشريك بسرعة.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today, try to strengthen the bonds that are shaken, and get rid of the ambiguities and differences between you and the partner quickly.",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "نتظر حتى تتأكد من طبيعة الأجواء المهنية ثم قرر إن كنت ستقدر على مواكبتها أم لا، وعليك أن تتخلى عن عنادك فى الفترة الحالي",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "We wait until you are sure of the nature of the professional atmosphere and then decide whether you will be able to cope with it or not, and you have to give up your stubbornness in the current period",
                ),

             Array
                (
                    "day" => "43",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " أنت تفهم أن الخلافات القديمة لا تهم في الوقت الحالي، بل إنها لم تكن تهم على الإطلاق من قبل. دلِل نفسك وجسدك عن طريق أخذ فترات راحة كافية بحيث تستمر صحتك جيدة لفترة أطول.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "You understand that the old differences do not matter at the moment, and they never mattered. Pamper yourself and your body by taking enough breaks so that your health lasts good longer.",

                ),

        );
               $this->horoscope_data[43]= 

     Array
        (
             Array
                (
                    "day" => "44",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "تكون على استعداد للبدء بالتخطيط لمشاريع مقبلة، فتسير الأمور كما هو متوقّع لها، ومفاجآت ضخمة وجيدة تتلقاها.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Be prepared to start planning for future projects, things will go as expected, and huge and good surprises you receive.",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "Touro",
                    "number" => "2",
                    "significance" => "إذا أردت النصيحة يجب أن تتعامل مع الشريك بهدوء، وأن تتجنّب النزاعات العقيمة باحثاً عن حلول مقبولة من الطرفين",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "If you want advice, you should deal with the partner quietly and avoid sterile conflicts in search of mutually acceptable solutions",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " اليوم تتواصل مع الآخرين بشكل لطيف، وتنفّذ رغباتك، أو تتلقى ما يسعدك من معلومات وأخبار",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today you communicate nicely with others, implement your wishes, or receive your information and news",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "قد تعيش مخاوف لا أساس لها وتختلق لنفسك أزمة لشدّة توترك وتفقد قدرتك على تحليل الواقع بشكل منطقي",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You may have unfounded fears and create a crisis for your stress and lose your ability to analyze reality logically",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "اليوم تركز على مساعدة أحد الزملاء في العمل، والكل يقدر وقوفك إلى جانبه ومساندته في ظرفه الدقيق",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today you focus on helping a colleague at work, and everyone can stand by his side and support him in his precise circumstances",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => " اليوم يبتسم لك الحظ، ويأتيك بالأخبار السارّة، وهناك شخص  يزرع الأمل في نفسك",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today you are blessed with luck, and you are greeted with good news, and there is someone who sows hope in yourself",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => "اليوم حاول أن تتجنّب التوتر قدر المستطاع، فهناك بعض المتاعب لكنها مؤقتة.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => " Today try to avoid tension as much as possible, there are some troubles but temporary .",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم تسهل الاتصالات قليلاً، وهذه الفترة دقيقة ومليئة بالنجاح والتقدم والإنجاز.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today facilitates communication a little, and this period is accurate and full of success and progress and achievement .",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "يسهّل لك هذا اليوم الاتصالات ويجعلك أكثر قدرة على الإقناع وكسب التأييد",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "This communication makes it easier for you today and makes you more persuasive and lobbying",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "اليوم قد تتراجع الحظوظ عن دعمك، بعد مراحل طوال من الأبواب المفتوحة، وتخضع لضغط كبير وتواجه بعض العراقيل.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today, the fortunes of your support, after many stages of open doors, may be under pressure and subject to considerable pressure and obstacles.",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " خذ خطوة إلى الوراء وحاول الاسترخاء. دع رأسك تهدأ وسوف تجد العوائق تختفي ببساطة من أمامك عندما لا تصر على تخطيها بالقوة. ",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Take a step back and try to relax. Let your head calm down and you will find the obstacles simply disappear from front of you when you do not insist on skipping them by force.",
                ),

             Array
                (
                    "day" => "44",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "حتى لو جاء النجاح بطريقة طبيعية في العمل، يجب أن تستمر في الاحتفاظ بسلامك الداخلي وأسلوبك المتواضع. بهذه الطريقة، تستطيع الاحتفاظ بصداقات العمل. اسمح لأحبائك بالإحساس بدفء عاطفتك. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Even if success comes naturally in the workplace, you must continue to maintain your inner peace and your humble style. In this way, you can maintain business friendships. Allow your loved ones to feel the warmth of your passion.",
                ),

        );
               $this->horoscope_data[44]= 

     Array
        (
             Array
                (
                    "day" => "45",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " اليوم لا تتردّد في اتخاذ المبادرة تجاه الزملاء، ولا تتوقّف طويلاً عند محطة متعثّرة إلاّ إذا كانت تعني لك كثيرًا.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today do not hesitate to take the initiative towards colleagues, and do not stop long at the station stumbling only if it means much to you .",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "Touro",
                    "number" => "2",
                    "significance" => "تؤدي النصيحة المفيدة للزملاء وتشاركهم اهتمامات موحدة وتحاول حل مشاكلهم العالقة",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Provide useful advice to colleagues and share common concerns and try to resolve their outstanding problems",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "لبرج الجوزاء",
                    "number" => "3",
                    "significance" => " اليوم لا تحاسب الحبيب على كل كلامه فتصرفاتك معه لم تكن الأفضل في المدة الأخيرة.",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today do not hold the beloved on all his words and your actions with him were not the best in the last period.",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "تطرأ مساعدة ما أو حظ من السماء يفتح أمامك بعض الأبواب المغلقة ويؤازرك لتخطي المصاعب",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "There is some help or luck from the sky that opens up some closed doors and helps you to overcome the difficulties",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " اليوم لا تستشر الآخرين بما يتعلق بقراراتك العاطفية، وحاول أن تتصرف من تلقاء نفسك.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Today do not consult others about your emotional decisions, and try to act on your own.",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => " الحكم على الشريك قد يكون خاطئًا أحيانًا، خذ العبرة من التجارب السابقة واتعظ.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Judging the partner may be wrong sometimes, take the lesson from past experiences and preach.",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => "اليوم كل المحاولات المغرضة تعجز عن هد عامل الثقة بينك وبين الشريك، وأنت أقوى من أي شكوك.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today all the attempts tendentious to fail the confidence factor between you and the partner, and you are stronger than any doubts.",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم تتخلص من العراقيل والعقبات الكبيرة، وتعرف مغازلة جديدة، أو تستقطب شخصا خلوقا، وتبدأ معه برومانسية مميزة.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Today you get rid of the obstacles and big obstacles, and you know new courtship, or attract people to create, and start with a distinctive romance.",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => ". حاذرْ من ساعات الغضب والكلام الذي يصدر عنك وتدفع ثمنه فيما بعد. كأنك ترفض كل ما يحمّلك مسؤولية وتُقبل على فترة تغييرات على الأرجح",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Be careful of the hours of anger and speech that is issued for you and pay for it later. As if you refuse all responsibility and accept a period of change most likely",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "ب اليوم تكثر المساعي لتمتين أواصر العلاقة والمصالحة، من خلال لقاءات رومانسية أو جلسات حميمة دافئة.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Today, there are many efforts to strengthen relations of reconciliation and reconciliation, through romantic encounters or warm intimate sessions.",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "عندك أنجزت الكثير ولكنك غير راض أكثر من أي وقتٍ مضى. إذا فكرت الآن في أنك ستقوم بالمزيد من الإنجازات بالتعنت والعناد فسوف تخسر نجاحك السابق وأيضًا صحتك.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You have accomplished a lot but you are not satisfied anymore than ever before. If you think now that you will make more achievements with intransigence and stubbornness, you will lose your previous success as well as your health.",
                ),

             Array
                (
                    "day" => "45",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " اليوم يمكنك حماية استقرار العلاقة بشرط التعاطي مع الظروف والمستجدّات بتعقل ورويّة.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today, you can protect the stability of the relationship provided that you deal with the conditions and developments with reason and rationality.",
                ),

        );
               $this->horoscope_data[45]= 

     Array
        (
             Array
                (
                    "day" => "46",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " اليوم  تصمد في وجه الأيام التي تتآمر معك وتحالفك، وتكون عواطفك جيّاشة وسحرك طاغيا بدون أدنى شك.",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Today stand up to the days that conspire with you and your alliance, and your emotions are hungry and enchanted without a doubt.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "Touro",
                    "number" => "2",
                    "significance" => "اليوم تكن متكّلاً على الآخرين في بعض الواجبات والمسؤوليات.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today you are relying on others for some duties and responsibilities.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "Gémeos",
                    "number" => "3",
                    "significance" => "يمكنك اليوم تبني موقفًا مؤيدًا لتقوية الروابط الأسرية، وسوف تتقبل عائلتك ذلك بسعادة وسوف تدعمك بشدة في خططك. هذا التعزيز في العلاقات سوف يستمر أيضًا في حياتك العاطفية. قد تتقرب من شخص محدد، قد ينتج عن ذلك علاقة طويلة المدى. ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "Today you can adopt a supportive attitude to strengthen family ties, and your family will happily accept this and will strongly support you in your plans. This reinforcement in relationships will also continue in your emotional life. May get close to a specific person, this may result in a long-term relationship.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم ستواجه المحاذير التي كنت تخشاها، لكنّك تتخطى المرحلة بأقلّ ضرر ممكن.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you will face the caveats that you were afraid of, but you get past the stage with minimal damage.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => ". الأجواء لا تساعدك اليوم على التعاطي مع الشريك كما هي العادة ما يثير استغرابه نوعاً ما",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "The atmosphere does not help you today to deal with the partner as is usually somewhat surprising.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "بعض الانفعالات والمواقف السلبيّة تفسد الأجواء الجميلة وتثير الحساسيات بينك وبين الشريك.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Some emotions and negative attitudes spoil the beautiful atmosphere and sensitivities between you and the partner.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => "اليوم تحاول أن تجد الحلول للمشكلات من دون تشنّج، المهم أن تنفتح على المحيط وأن تعبّر عن رغباتك وطريقة تفكيرك بلا تحفظ.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today you try to find solutions to problems without spasm, it is important to open to the ocean and express your wishes and way of thinking without reservation.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " علاقتك العاطفية تكون مميزة، والسفر مع الشريك مشروعكما المفضل لتجديد شهر العسل",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Your emotional relationship is distinctive, and traveling with your partner is your favorite honeymoon renewal",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => "تنجح في مهمة أو في دراسة، أو تحقق ربحاً عن طريق فرصة مؤاتية، وربما تدعمك جهات نافذة. يسقط عليك الوحي، وقد تبحث بقضية زواج أو تعاون أو ارتباط",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You succeed in a task or study, or make a profit through a favorable opportunity, and you may be supported by influential parties. The revelation falls on you, and you may be looking at a marriage, cooperation or association case",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "لا تسمح لخيبة أملك أن تمنعك من التقدم، وركز على ما هو آت، وحتى إن استغرق الأمر زمنًا أطول، فسوف تصل إلى هدفك بالإصرار والصبر. ",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Do not allow your disappointment to prevent you from progress, focus on what is coming, and even if it takes longer, you will reach your goal with determination and patience.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "اليوم الطموحات كثيرة، لكن التخوف من عرقلة يبقى حاضرًا. اليوم أنت مدعو إلى الاهتمام بالشريك، وتجنّب النزاعات والدعاوى القضائية.",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "Today many ambitions, but the fear of obstruction remains present. Today you are invited to take care of the partner, avoiding disputes and litigation.",
                ),

             Array
                (
                    "day" => "46",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " اليوم تشعر بالقوّة في مواجهة الظروف الطارئة، وتتمتّع بإرادة قويّة حيوية تؤهّلك للمنافسة والنجاح والتفوّق.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today you feel strong in the face of emergency conditions, and enjoy a strong will vital to competition, success and excellence.",
                ),

        );
               $this->horoscope_data[46]= 

     Array
        (
             Array
                (
                    "day" => "47",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => " لا تقدم على خطوات قد تعرضك للكثير من المخاطر وتهدد العلاقة وتودي بك إلى الأسوأ",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => " Do not step on steps that may expose you to many risks and threaten the relationship and lead you to the worst",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "Touro",
                    "number" => "2",
                    "significance" => " يشكل هذا اليوم محطة مهمة في حياتك العاطفية، وتتخلص من جدال حول قصة عاطفية أو حتى مالية.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "This is an important day in your emotional life, and you get rid of a controversy about an emotional or even financial story.",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "Gémeos",
                    "number" => "3",
                    "significance" => "لا داعي إلى تقلّب المشاعر تجاه الحبيب، لأنّها مجرّد ضغوط عابرة يسبّبها تزامن الواجبات والمسؤوليات المتنوّعة",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "There is no need to fluctuate feelings towards the beloved, because it is just a temporary pressure caused by the synchronization of duties and responsibilities varied",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم تتغلب على الكثير من الضغوط وتتخذ القرار الأمثل بغية التخلص مما يزعج الشريك.",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today you overcome a lot of pressure and make the best decision to get rid of what bothers the partner.",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "هذه فترة مليئة بالحركة والسفر واللقاءات، وقد تضطر إلى الاهتمام بشؤون تشغلك عن المشاريع الجديدة.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "This is a period full of traffic, travel and meetings, and you may have to pay attention to your business for new projects.",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "اليوم تتلقى الأجوبة التي طالما انتظرتها، وتحصل على فرصة ثمينة لإظهار كفاءة وجدارة.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "Today you receive the answers you have long waited for, and you get a precious opportunity to show efficiency and merit ",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => " اليوم هناك تأثير إيجابي في أوضاعك المالية، أو يحدث تغييرات تحصل في هذا الإطار.",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Today there is a positive impact on your financial situation, or changes occur in this framework.",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "اليوم يوفّر لك صداقات حلوة ولقاءات، وربما يطرأ عليك تغييرًا، ويدعوك إلى المجازفة، فتقدم بلا خوف.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => " Today gives you sweet friendships and meetings, and may change you, and invites you to risk, and progress without fear.",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " اليوم اتصالاتك سهلة، ولديك قدرة أكثر على الإقناع وكسب التأييد.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today your contacts are easy, and you have more ability to convince and gain support .",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "الكثير من الموضوعات في الوقت الحالي لا تسير بالسلاسة التي خططت لها، وربما يجب عليك قبول الأشياء التي لا تستطيع تغييرها.",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Many topics at the moment are not going as smoothly as you planned, and you may have to accept things that you can not change.",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => " تضطر إلى الانعزال قليلاً والابتعاد عن الصخب، وخصوصاً أن حياتك العاطفية قد تعرف بعض الاهتزاز",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "You have to be a little detached and keep away from the hustle, especially that your emotional life may know some vibration",
                ),

             Array
                (
                    "day" => "47",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "الأمر يزداد صعوبة في العمل، لذلك يجب أن تقبل عروض المساعدة من زملائك حتى يقل جبل العمل الذي يقبع أمامك تدريجيًا إلى أن يصبح مهامًا يمكن التعامل معها.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "It's getting harder to work, so you have to accept the offers of help from your colleagues so that the mountain of work in front of you is gradually reduced to become tasks you can handle.",
                ),

        );
               $this->horoscope_data[47]= 

     Array
        (
             Array
                (
                    "day" => "48",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "يجعل هذا اليوم أمورك في العمل تتغير نحو الأفضل وأوضاعك المالية في تحسن مستمر أكثر من المتوقع",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "This makes your business situation change for the better and your finances are improving more than expected",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "Touro",
                    "number" => "2",
                    "significance" => " توخ الحذر عند لوم الآخرين – فمن الممكن أن تكون قد ارتكبت أخطاءً أيضًا. إذا كنت متفتحًا تجاه الأشياء الجديدة، فسوف تتعلم المزيد عن نفسك. ",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Be careful when blaming others - mistakes may also have been made. If you are open to new things, you will learn more about yourself.",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "Gémeos",
                    "number" => "3",
                    "significance" => " يحفل هذا اليوم بالتطورات الإيجابية ويجعل أمورك في العمل تستقر بشكل أفضل وتشعر أنك تبلي بلاء حسناً ",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "This day is full of positive developments and your work is stabilizing better and you feel that you are doing well",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "اليوم، مهاراتك التنظيمية والاجتماعية قوية على غير العادة، فيجب أن تستغل ذلك للسيطرة على الأمور.   سوف يقدرك الناس ويعاملونك بمودة. فكر في إعادة بعض من هذه الأمور",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "Today, your organizational and social skills are unusually strong, you have to use it to control things. People will appreciate and treat you with affection. Think about returning some of these things",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " ستتلقى عدد من المقترحات التي يجب أن تحملها محمل الجد. يمكنك التحرر من الأغلال القمعية والأنماط التقليدية وترك زمام الأمور لشخصيتك.",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "You will receive a number of proposals that you must take seriously. You can free yourself from the oppressive shackles and traditional patterns and let your personality go.",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => " من المحتمل أن تنقلب عليك الأمور التي لم تحسمها بعد عندما لا تتواجد الفرص السانحة والظروف المبشرة المتاحة الآن. ",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "It is likely that things that have not yet been resolved will turn to you when the opportunities and the promising circumstances are not available.",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => "أنت على وفاق وانسجام تام مع محيطك، سواء على المستوى الشخصي أو المهني. انتفع من هذا التناغم في تقوية علاقاتك والروابط القائمة بينك وبين الآخرين للتسلح في الأوقات العصيبة التي تكون فيها مجموعة الأبراج الكونية غير مبشرة والأحوال ليست لصالحك. ",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "You are in perfect harmony with your surroundings, both personally and professionally. Benefit from this harmony in strengthening your relationships and links between you and others for armaments in difficult times in which the constellation of cosmic towers is not promising and conditions are not in your favor.",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "هناك تنبؤ بقدوم فترة اختبار هامة، فتعامل معها بتفاؤل وثق في إمكاناتك الذاتية.  قد تكتشف فرصة أو فرصتين لتحسين الأمور.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "There is a prediction that an important test period will come, that you will deal with it with optimism and trust in your own potential. You may discover a chance or two opportunities to improve things.",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " اليوم خجلك وتردّدك الدائم يحولان دون أن تتقرّب من الحبيب وتتعرّف إليه أكثر وتكتشف نفسيته.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today your shyness and constant hesitation prevent you from getting closer to your beloved and becoming more familiar with him and discovering his psychology.",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "يمكّنك هذا اليوم من الاعتماد على مساعدة الزملاء، كما على ودّ يظهره أحد الاصدقاء النافذين",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "This day you can rely on the help of colleagues, as on the dues shown by a powerful friend",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "يجعلك هذا اليوم تحتاج إلى مرونة أكبر للتفاهم مع المحيط، وربما تصاب بجرح في كبريائك",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => " This day makes you need greater flexibility to understand the ocean, and you may be injured in your pride",
                ),

             Array
                (
                    "day" => "48",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " تتسم حياتك الخاصة بعدد من النزاعات. لا تدع الأمر يصيبك بالإحباط، حتى وإن واجهت الأسوأ اليوم. انتظر قليلاً، لأن الحل يأتي من الداخل في بعض الأحيان. لا تقلل من أية أعراض جسدية قد تحس بها. ابحث عن السبب. ",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Your private life is characterized by a number of conflicts. Do not let it get you frustrated, even if you face the worst today. Wait a bit, because the solution comes from inside sometimes. Do not reduce any physical symptoms you may feel. Find the cause.",
                ),

        );
               $this->horoscope_data[48]= 

     Array
        (
             Array
                (
                    "day" => "49",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "على الرغم من ظهور غيمة رمادية لن يكون الجو عاصفاً، وأنت على موعد مع أجواء رائعة",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "Although the appearance of a gray cloud will not be a stormy atmosphere, you are on a date with a wonderful ambiance",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "Touro",
                    "number" => "2",
                    "significance" => "يأتي اليوم مصحوبًا ببعض المشكلات، فسوف تقابل مواقف لا يمكن التغلب عليها إلا من خلال تغيير رؤيتك للأمور. افصل نفسك عن كل ما هو قديم ومعروف، وتطلع لكل ما هو جديد.",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Today comes with some problems, you will meet positions that can not be overcome only by changing your vision of things. Unplug yourself from everything that is old and well known, and look for everything that is new.",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "Gémeos",
                    "number" => "3",
                    "significance" => "إنسَ الحب القديم ومعاناته وابدأ علاقة جديدة إنما على أسس واضحة منذ البداية",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => " Forget old love and suffering and begin a new relationship but on clear foundations from the beginning",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => " سوف تنجح في العمل وخارجه، وحتى في حياتك الشخصية، سوف ينتج عن نظرتك الدافئة للأمور الكثير من الفوائد. ",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "You will succeed at work and beyond, and even in your personal life, your warm view of things will result in many benefits.",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => "ادخل روحًا جديدة إلى علاقاتك من خلال الأفعال غير التقليدية والعفوية، وسوف ترى أن هذا ليس بصعب. بقليل من الثقة بالنفس، يمكنك مفاجئة الآخرين بطرقٍ شتى. ",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => "Enter a new spirit into your relationships through non-traditional and spontaneous actions, and you will see that this is not difficult. With a little self-confidence, you can surprise others in different ways.",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "اذا كنت ترغب في النجاح وفي تحقيق شيء ذو قيمة، فحان الوقت أن تتحالف مع الآخرين، قد يكونوا أقرباء أو أصدقاء أو زملاء في العمل. لا تدع الفرصة تفوتك، فيجب عليك الانتفاع من هذه الفرصة وبذل مجهود.",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "If you want to succeed and achieve something valuable, it is time to ally yourself with others, they may be relatives, friends or co-workers. Do not let the opportunity pass, you should take advantage of this opportunity and make an effort.",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => "التفاهم مع الشريك يخلصك من مضاعفات خطرة، يستحسن أن تأتي المعالجات هادئة وحكيمة",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Understanding with your partner will save you from serious complications. It is advisable that treatments come calm and wise",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => "لا تتأثر بآراء الآخرين ولا تجعلها تحيدك عن معتقداتك وبدلاً من ذلك، استخدم هذه المواجهة لإيجاد ما يدعم الحجج المؤيدة لمواقفك.",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Do not be influenced by the opinions of others and do not make them deviate from your beliefs. Instead, use this confrontation to find support for your arguments.",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " تعرف جيداً كيف تنال إعجاب الحبيب وتثيره بجاذبيتك وشخصيتك الممتعة وروحك المرحة.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "You know how to impress your lover and inspire him with your attractiveness, your fun personality and your cheerful spirit.",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "إذا واجهت فتوراً في الأجواء العاطفية او شكوكاً تجاه الحبيب، باستطاعتك أن تتطرّق إلى الموضوع لتستوضحه",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "If you experience a chill in the emotional atmosphere or doubts about the beloved, you can address the subject to clarify it",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "يعيد إليك هذا اليوم نشاطك المهني بثقة كبيرة، وتفرض شخصيتك القوية وتتخذ القرارات الجريئة",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "This day brings you back your professional activity with great confidence, imposes your strong personality and makes bold decisions",
                ),

             Array
                (
                    "day" => "49",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => " اليوم يفرض عليك بعض التأني في الكلام والشرح الواضح والمقنع.. وربما تجد سهولة في التعامل مع حبيبك كما تلقى منه كل الدعم المعنوي وغيره.",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "Today, you are forced to speak clearly and convincingly. You may find it easy to deal with your loved one and receive all moral and other support.",
                ),

        );
               $this->horoscope_data[49]= 

     Array
        (
             Array
                (
                    "day" => "50",
                    "sign" => "لبرج الحمل",
                    "number" => "1",
                    "significance" => "يجعل هذا اليوم أفكارك لامعة ومتفائلاً أكثر من العادة ومتحمساً جداً، فتسعى جاهداً لتقديم الأفضل",
                    "url" => "horoscopo.carneiro.ar.zmobs.com",
                    "en" => "This day makes your thoughts bright, more optimistic than usual and very enthusiastic, striving to make the best",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "Touro",
                    "number" => "2",
                    "significance" => "واجه مشاعرك ولا تتهرب منها وأخبر الحبيب بحبك الذي يزداد تجاهه يوماً بعد آخر",
                    "url" => "horoscopo.touro.ar.zmobs.com",
                    "en" => "Encounter your feelings and do not evade them and tell your lover about your love that is growing towards him day after day",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "Gémeos",
                    "number" => "3",
                    "significance" => " يولّد هذا اليوم جواً كبيراً من الارتياح والسعادة حولك، وخصوصاً مع بعض الزملاء",
                    "url" => "horoscopo.gemeos.ar.zmobs.com",
                    "en" => "This day generates a great atmosphere of satisfaction and happiness around you, especially with some colleagues",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "لبرج السرطان",
                    "number" => "4",
                    "significance" => "يجعل منك هذا اليوم الجيد المفعم بالأحداث السعيدة المسيطر وصاحب القدرة على التحكم في كل الأمور لمصلحتك",
                    "url" => "horoscopo.caranguejo.ar.zmobs.com",
                    "en" => "It makes you a good day full of happy events with control and the ability to control all things for your own good",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "لبرج الأسد",
                    "number" => "5",
                    "significance" => " تستعيد حيويتك في العلاقة وتبدو متحمّساً لبدء مخططات وتنفيذ مشاريع جديدة مع الشريك",
                    "url" => "horoscopo.leao.ar.zmobs.com",
                    "en" => " regain your vitality in the relationship and look eager to start planning and implementing new projects with your partner",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "Virgem",
                    "number" => "6",
                    "significance" => "يقدم لك أحد الزملاء الجدد عوناً لم تكن تتوقعه منه، أنت قلق وتجد صعوبة في التركيز إلا أن ذلك ينتهي قريباً",
                    "url" => "horoscopo.virgem.ar.zmobs.com",
                    "en" => "A new colleague offers you a help you never expected, you are worried and have trouble concentrating, but it will end soon",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "Balança",
                    "number" => "7",
                    "significance" => "تصحو هذا اليوم على أمر طارئ يجعل يومك أكثر جدية وانفتاحاً مع الزملاء",
                    "url" => "horoscopo.balanca.ar.zmobs.com",
                    "en" => "Wake up today to an emergency that makes your day more serious and open with colleagues",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "لبرج العقرب",
                    "number" => "8",
                    "significance" => " تشتاق إلى الحبيب الغائب وتعيش توتراً مستمراً، لعل هذه التجربة تفيد في تقربك منه أكثر من قبل عندما تجتمعان",
                    "url" => "horoscopo.escorpiao.ar.zmobs.com",
                    "en" => "Longing for the absent beloved and living in constant tension, perhaps this experience benefits in bringing you closer than before when you meet",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "لبرج القوس",
                    "number" => "9",
                    "significance" => " اليوم تتفق مع جماعات جديدة، وترتبط بصداقات مهمة.. تلاحظ أن محبة الزملاء لك تزداد يومًا بعد يوم، والفضل طريقة معالجتك الأمور بصدق وشفافية.",
                    "url" => "horoscopo.sagitario.ar.zmobs.com",
                    "en" => "Today you agree with new groups and are associated with important friendships. You notice that the love of colleagues is increasing day by day, and the way to handle things honestly and transparently.",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "لبرج الجدي",
                    "number" => "10",
                    "significance" => "متطلباتك كثيرة، فهي تضع الشريك تحت ضغط كبير وتجعله متوتراً ومنفعلاً",
                    "url" => "horoscopo.capricornio.ar.zmobs.com",
                    "en" => "Your requirements are many, they put the partner under great pressure and make him tense and emotional",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "برج الدلو",
                    "number" => "11",
                    "significance" => "يحدث هذا اليوم تغييراً في طريقة أدائك مهامك وتنفيذ استثماراتك وتكون نتائجه مهمة",
                    "url" => "horoscopo.aquario.ar.zmobs.com",
                    "en" => "This day changes the way you perform your tasks and implement your investments, and its results are important",
                ),

             Array
                (
                    "day" => "50",
                    "sign" => "برج الحوت",
                    "number" => "12",
                    "significance" => "لن يتركك الشريك وحيداً، بل يقف إلى جانبك ساعة الحاجة ويظهر عن شجاعة غير منتظرة",
                    "url" => "horoscopo.peixes.ar.zmobs.com",
                    "en" => "your partner will not leave you alone, but the hour of need will stand beside you and show unexpected courage",
                ),

        );
    
}
    public function getData($number) {
	  //get the value here and return the result
        $date_number = date("z") + 1;
        $num = $date_number % 50;
        if ($num % 50 == 0) {
            $num = 50;
        }
        //get the horoscope 
        foreach ($this->horoscope_data[$num - 1] as $value) {
            if ($value['number'] == $number) {
                return $value['significance'];
            }
        }
    }

}


?>
