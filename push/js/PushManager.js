


class PushManager
{

  static sendRequestPush(dataLastIdObject,CALLBACK)
  {
    const formData = new FormData();
        for (let key in dataLastIdObject) {
            Array.isArray(dataLastIdObject[key])
                ? dataLastIdObject[key].forEach(value => formData.append(key + '[]', value))
                : formData.append(key, dataLastIdObject[key]) ;
        }
        sendResquetFormReponceJsonAsynchrone(formData,'/MyDiv-web/push/php/getPush.php',CALLBACK);
  }
}
