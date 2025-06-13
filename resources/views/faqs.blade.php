@extends('main')

@section('title', 'FAQs - Followers on Door')
@section('meta_description', 'Got questions? Find all answers about how our follower/subscriber growth system works for Instagram, YouTube, and Telegram.')
@section('og_title', 'FAQs | Followers on Door')
@section('og_description', 'Find out how to get free Instagram followers, YouTube subscribers, and Telegram members.')
@section('twitter_title', 'Followers on Door - Frequently Asked Questions')
@section('twitter_description', 'Explore how you can use Followers on Door to boost your online presence.')


@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">🙋‍♂️ Frequently Asked Questions</h1>

    <div class="accordion" id="faqAccordion">
        @foreach([
            ['❓ What is Followers on Door?', 'Followers on Door is a service that helps you grow your followers or subscribers on platforms like Instagram, YouTube, and Telegram by providing affordable, quick growth solutions.'],
            ['⏱️ How long does it take to receive followers/subscribers?', 'Usually, you receive your followers or subscribers within 3 days of a successful payment.'],
            ['🔐 Do I need to share my password?', 'No, never. We only need your username or channel link. Your account remains safe and private.'],
            ['🛡️ Is the service safe?', 'Yes, we use secure and verified growth methods. Your account is never at risk of being banned.'],
            ['📱 What platforms do you support?', 'Currently, we support Instagram, YouTube, and Telegram. More platforms will be added soon.'],
            ['💳 How can I make a payment?', 'You can pay using UPI, GPay, PhonePe, or Paytm. A payment link or QR code is shown after submitting your details.'],
            ['⚠️ What if I don’t receive my followers?', 'If you’ve paid and it’s been more than 3 days, please contact us via our contact form or email. We’ll resolve it immediately.'],
            ['💸 Can I request a refund?', 'If we fail to deliver within the promised time and cannot resolve the issue, we will issue a full refund.'],
            ['📉 Will the followers unsubscribe later?', 'We try to ensure stable followers, but natural drop-offs may happen. We occasionally provide free top-ups.'],
            ['🤝 Is there any support available?', 'Yes! You can reach out to us anytime using the Contact Us page, and our team will assist you promptly.']
        ] as $index => [$question, $answer])
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $index }}">
                <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                    {{ $question }}
                </button>
            </h2>
            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    {{ $answer }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

