@extends ('layout')

@section ('content')

    @foreach($faqs as $faq)
        <div id="myblogs">
            <div>
                <h2>
                    <a href = "{{ route('faq.show', $faq) }}">{{$faq->question}}</a>
                </h2>
            </div>

            <img id="blogsfoto" src="/img/hzlogomainpage.png" alt="">

        </div>
    @endforeach
    <div id="FAQ">
        <h1>Frequently Asked Questions</h1>

        <button>
            <h1>How can you print a document from your laptop at HZ?</h1> <img src="/img/Printen.png"> <br> <a
                href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=78827361-9b3f-4261-9b41-940c9942f3da"
                target="_blank">Find the answer here.</a>
        </button>
        <button>
            <h1>How can you scan a document a send it to your laptop at HZ?</h1> <img src="/img/Scannen.png"><br> <a
                href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8-a56d-47dc-bd0f-fb9cdf78f20b"
                target="_blank">Find the answer here.</a>
        </button>
        <button>
            <h1>How can I buy something (like when I sign up for the IT introduction event at Friday 16/09) on the HZ web
                shop?</h1> <img src="/img/HZLogoKlein.png"> <br> <a
                href="https://webshop.hz.nl/WebshopApp/default.aspx?menu=082076044027019251066025111065201099237062130097"
                target="_blank">Find the answer here.</a>
        </button>
        <button>
            <h1> Where can I find the latest instructions on what to do when you show symptoms of COVID?</h1> <img
                src="/img/Rijksoverheidlogo.png"> <br> <a
                href="https://www.rijksoverheid.nl/onderwerpen/coronavirus-covid-19" target="_blank">Read More on the
                Rijksoverheid.</a>
        </button>
        <button>
            <h1>How can you book a project space in one of the wings?</h1> <img src="/img/confrenceroom.png"> <br> <a
                href="https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c" target="_blank">Find
                the answer here.</a>
        </button>
        <button>
            <h1>What are the instructions if you want to park your car at the HZ parking lot?</h1> <img
                src="/img/parkeren.png"> <br> <a href="https://hz.nl/over-de-hz/contact/middelburg"
                                                 target="_blank">Find the answer at
                "parkeren".</a>
        </button>


    </div>
@endsection
