<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>产品信息</title>
</head>
<link href="./res/css/style.css" rel="stylesheet" type="text/css">
<body>
<?php include("menu.php") ?>
<h2>添加产品</h2>
<form>
    <table width="100%">
        <tr>
            <th>工艺编号</th>
            <td><input type="text" name=""/></td>
            <th>物料编码</th>
            <td><input type="text" name=""/></td>
            <th>生成批号</th>
            <td><input type="text" name=""/></td>
            <th>版本号</th>
            <td><input type="text" name=""/></td>
        </tr>
        <tr>
            <th>生产型号</th>
            <td><input type="text" name=""/></td>
            <th>物料名称</th>
            <td><input type="text" name=""/></td>
            <th>材料牌号</th>
            <td><input type="text" name=""/></td>
            <th>每台件数</th>
            <td><input type="text" name=""/></td>
        </tr>
        <tr>
            <th>产品名称</th>
            <td><input type="text" name=""/></td>
            <th>规格型号</th>
            <td><input type="text" name=""/></td>
            <th>毛坯种类</th>
            <td><input type="text" name=""/></td>
            <th>零件编号</th>
            <td><input type="text" name=""/></td>
        </tr>
        <tr>
            <th>工艺路线名称</th>
            <td><input type="text" name=""/></td>
            <th>零件标识</th>
            <td><input type="text" name=""/></td>
            <th>材料标识</th>
            <td><input type="text" name=""/></td>
            <th>热处理状态</th>
            <td><input type="text" name=""/></td>
        </tr>
    </table>
    <input type="submit" value="提交"/>
    <input type="reset" value="重置">
</form>
</body>
</html>