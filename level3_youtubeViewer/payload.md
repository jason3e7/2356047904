# test recode #
* base, `uCLEq9V0-Yk`, nothing 200
* ``, Q___Q  Your input seems invalid. 404
* `uCLEq9V0-Yk%23`, Q___Q  Your input seems invalid. 404
* `uCLEq9V0-Yk;`, Q___Q  Your input seems invalid. 404
* `uCLEq9V0-Yk%3F`, Q___Q  Your input seems invalid. 404
* `uCLEq9V0-Yk%26`, Q___Q  Your input seems invalid. 404
* `uCLEq9V0-Yk%26t=1`, Q___Q  Your input seems invalid. 404
* ` `, nothing 400
* `uCLEq9V0-Yk `, nothing 400
* `%75%43%4c%45%71%39%56%30%2d%59%6b`, nothing 200
* `test`, Q___Q  Your input seems invalid. 404
* `test `, nothing  400
* `test%09`, nothing 400
* `test%0a`, Q___Q  Your input seems invalid. null
* `{sleep 10}`, nothing 400
* `{sleep,10}`, Q___Q  Your input seems invalid. 404
* `{echo,uCLEq9V0-Yk}`, Q___Q  Your input seems invalid. 404
* `;%0asleep%2010`, Q___Q  Your input seems invalid. null

之後可以改成 table 會比較容易看和filter.

## special character ##
* %23, #

* %09, horizontal tab
* %3F, ?
* %26, &
* %3D, =
* %20
* %0a
* %0d
* ;
* &
* |

## 猜測思路和效正
* 猜測可能是判斷回應 200, 但是速度很快, 自己實作的好慢
  * 第一個就猜錯, 是判斷回應 404, 其他都是空白.
* 猜測可能有 filter 空白, 因為不管打什麼, 空白插在前面, 中間, 後面, 都是出現 nothing
  * %09 也一樣, $IFS$9 也一樣
  * 但是 %0a 不一樣
  * 出現例外
  * 所以猜測的方向又錯誤, 400 bad request
* 後面到底有沒有加 .jpg 呢?, 目前感覺沒有
  * 猜測錯誤, 實際上有
* 目前猜測是使用 回應碼 200, 
  * https://www.youtube.com/watch?v=, 去判斷.
    * 會這樣猜是因為有些 test request, 應該會是 302 但是沒有顯示.
  * uCLEq9V0-Yk%26t%3d1, 這個 payload 結果也打臉自己
  * 對, 又猜錯了
* 也有猜測長度問題, 共 11 碼.
  * %0a%0a%0a%0a%0a%0a%0a%0a%0a%0a%0a, Q___Q  Your input seems invalid.
  * 沒有這個 filter, 錯了
* 合理懷疑, 要不出現 Q___Q  Your input seems invalid, 才會執行, 才能攻擊.
  * 這個猜對了.
