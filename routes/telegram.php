<?php
/** @var SergiX44\Nutgram\Nutgram $bot */

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\ForceReply;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
use SergiX44\Nutgram\Telegram\Types\Keyboard\KeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\ReplyKeyboardMarkup;
use SergiX44\Nutgram\Telegram\Types\Keyboard\ReplyKeyboardRemove;

/*
|--------------------------------------------------------------------------
| Nutgram Handlers
|--------------------------------------------------------------------------
|
| Here is where you can register telegram handlers for Nutgram. These
| handlers are loaded by the NutgramServiceProvider. Enjoy!
|
*/


//////    Inline Keyboard   ///////

//$bot->onCommand('start', function(Nutgram $bot){
//    $bot->sendMessage('Welcome!', [
//        'reply_markup' => InlineKeyboardMarkup::make()
//            ->addRow(
//                InlineKeyboardButton::make('A', callback_data: 'type:a'),
//                InlineKeyboardButton::make('B', callback_data: 'type:b')
//            )
//    ]);
//});
//
//$bot->onCallbackQueryData('type:a', function(Nutgram $bot){
//    $bot->answerCallbackQuery([
//        'text' => 'You selected A'
//    ]);
//});
//
//$bot->onCallbackQueryData('type:b', function(Nutgram $bot){
//    $bot->answerCallbackQuery([
//        'text' => 'You selected B'
//    ]);
//});

//////////////////////////   Reply Keyboard    //////////////////////////////////////

//$bot->onCommand('start', function(Nutgram $bot){
//    $bot->sendMessage('Welcome!', [
//        'reply_markup' => ReplyKeyboardMarkup::make()->addRow(
//            KeyboardButton::make('Give me food!'),
//            KeyboardButton::make('Give me animal!'),
//        )
//    ]);
//});
//
//$bot->onText('Give me food!', function (Nutgram $bot) {
//    $bot->sendMessage('Apple!');
//});
//
//$bot->onText('Give me animal!', function (Nutgram $bot) {
//    $bot->sendMessage('Dog!');
//});

/////////////////////////////////  Remove the Reply Keyboard   //////////////////////////////////////

//$bot->onCommand('cancel', function (Nutgram $bot) {
//    $bot->sendMessage('Removing keyboard...', [
//        'reply_markup' => ReplyKeyboardRemove::make(true),
//    ])?->delete();
//});

////////////////////////////////         Force Reply             ///////////////////////////////////////

//$bot->onCommand('start', function(Nutgram $bot){
//    $bot->sendMessage('Welcome!', [
//        'reply_markup' => ForceReply::make(
//            force_reply: true,
//            input_field_placeholder: 'Type something',
//            selective: true,
//        ),
//    ]);
//});
//

////////////////////////////////////////////////////////////////////////////////////////////

//$bot->onCommand('start', function (Nutgram $bot) {
//    $kb = ['reply_markup' =>
//        ['keyboard' => [
//            [
//                ['text' => '🍴 Меню'],
//            ],
//            [
//                ['text' => '🛍 Мои заказы'],
//            ],
//            [
//                ['text' => '✍️ Оставить отзыв'],
//                ['text' => '⚙️ Настройки'],
//            ],
//        ], 'resize_keyboard' => true]
//    ];
//    $bot->sendMessage("Выберите одно из следующих", $kb);
//});
//
//$bot->onText('🍴 Меню', function (Nutgram $bot) {
//
//    $kb2 = ['reply_markup' =>
//        ['keyboard' => [
//            [
//                ['text' => '📍 отправить геолокацию', 'request_location'=> true],
//                ['text' => '☎ отправить контакты','request_contact'=> true],
//            ],
//            [
//                ['text' => '🔄 переслать собшение']
//            ],
//            [
//                ['text' => '⬅ назад'],
//
//            ],
//        ], 'resize_keyboard' => true]
//    ];
//
//    $bot->sendMessage("Выберите", $kb2);
//    $bot->answerCallbackQuery();
//});
//
//$bot->onText('⬅ назад', function (Nutgram $bot) {
//    $kb = ['reply_markup' =>
//        ['keyboard' => [
//            [
//                ['text' => '🍴 Меню'],
//            ],
//            [
//                ['text' => '🛍 Мои заказы'],
//            ],
//            [
//                ['text' => '✍️ Оставить отзыв'],
//                ['text' => '⚙️ Настройки'],
//            ],
//        ], 'resize_keyboard' => true]
//    ];
//    $bot->sendMessage("Выберите одно из следующих ", $kb);
//
//});
//$bot->onText('🔄 переслать собшение', function (Nutgram $bot) {
//    $id = $bot->userId();
//    $bot->sendMessage('Nma gap ', ['chat_id' => 1153216]);
//
//});
//
//
//
////$bot->onChannelPost(function (Nutgram $bot){
////
////    $msg_id = $bot->messageId();
////    $bot->forwardMessage('1307688882', '-1001563939142', $msg_id);
////});




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









