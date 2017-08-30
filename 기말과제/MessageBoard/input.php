<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src = "https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../css/main.js" charset="utf-8"></script>
    <script src="../css/board_input.js" charset="utf-8"></script>
  </head>
  <body>
    <div>
      <hr>
      <center>
        <h1>게시글 작성</h1>
      </center>
      <hr>
    </div>
    <center>
    <div class="wrap">
      <form class="board_input" action="input_result.php" method="post" enctype="multipart/form-data">
        <table class = "border_input_table">
          <tr>
            <td class = "for_input">제목</td>
            <td>
              <input type="text" name="input_subject">
            </td>
          </tr>

          <tr>
            <td colspan = "2"><hr></td>
          </tr>

          <tr>
            <td class = "for_input">내용</td>
            <td>
              <textarea name="input_content" rows="30" cols="100" ></textarea>
            </td>
          </tr>

          <tr>
            <td colspan = "2"><hr></td>
          </tr>

          <tr>
            <td class = "for_input">이미지 업로드</td>
            <td>
              <input type="file" name="img_upload">
            </td>
          </tr>

          <tr>
            <td colspan = "2"><hr></td>
          </tr>

          <tr>
            <td class = "for_input">파일 업로드</td>
            <td>
              <input type="file" name="file_upload">
            </td>
          </tr>

          <tr>
            <td colspan = "2"><hr></td>
          </tr>

          <tr>
            <td class = "for_submit">
              <button type="submit" class = "submit_button" name = "submit">
                <h2>작성완료</h2>
              </button>
            </td>
          </tr>

        </table>
      </form>
    </div>
    </center>
  </body>
</html>
