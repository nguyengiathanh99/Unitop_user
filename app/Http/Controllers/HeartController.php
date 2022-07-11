<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartController extends Controller
{
    public function index(Request $request)
    {
    dd(123);

        // $model = Heart::find()
        //   ->where(['news_id' => $id])
        //   ->andWhere(['user_id' => Yii::$app->user->identity->id])->one();

        // if (!$model) {
        //   $model = new Heart();
        //   $model->status = 0;
        // }

        // $model->news_id = $id;
        // $model->user_id = Yii::$app->user->identity->id;
        // // $model->user_id = 1;
        // $model->created_at = date('Y-m-d H:i:s');
        // $model->status = ($model->status == 0) ? 1 : 0;

        // if ($model->save()) {
        //   $news = News::find()->where(['id' => $id])->one();

        //   if ($model->status == 0) {
        //     $news->count_heart = $news->count_heart - 1;
        //   } else {
        //     $news->count_heart = $news->count_heart + 1;
        //   }
        //   if ($news->save()) {
        //     $count['heart'] = $news->count_heart;
        //     $count['stt'] = ($model->status == 0) ? "unheart" : "heart";
        //     echo json_encode($count);
        //   }
        // }
    }

}
