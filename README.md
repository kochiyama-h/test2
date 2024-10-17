# アプリケーション名  
もぎたて  


## 環境構築  　　
Dockerビルド  　　
　1 git clone git@github.com:kochiyama-h/test2.git   　　
  2 docker-compose up -d --build  　　

Laravel 環境構築　　
　 1 docker-compose exec php bash　　
   2 composer install　　
   3 env.exampleファイルからevnを作成し、環境変数を変更　　
   4 php artisan key:　　
   5 php artisan migrate　　
   6 php artisan db:seed　　

## 使用技術(実行環境)　　
  - PHP 7.4　　
  -Laravel 8.75　　
  -MySQL 8.0.26　　

## ER図　　
[Uploading E<mxfile host="app.diagrams.net" agent="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36" version="24.7.17">
  <diagram name="ページ1" id="IhC4J_wI5719MEn2c0ov">
    <mxGraphModel dx="1034" dy="446" grid="1" gridSize="10" guides="1" tooltips="1" connect="1" arrows="1" fold="1" page="1" pageScale="1" pageWidth="827" pageHeight="1169" math="0" shadow="0">
      <root>
        <mxCell id="0" />
        <mxCell id="1" parent="0" />
        <mxCell id="s7QrAUVHioWoQTtM7XQC-1" value="productsテーブル" style="shape=table;startSize=30;container=1;collapsible=0;childLayout=tableLayout;" vertex="1" parent="1">
          <mxGeometry x="650" y="80" width="120" height="260" as="geometry" />
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-2" value="" style="shape=tableRow;horizontal=0;startSize=0;swimlaneHead=0;swimlaneBody=0;strokeColor=inherit;top=0;left=0;bottom=0;right=0;collapsible=0;dropTarget=0;fillColor=none;points=[[0,0.5],[1,0.5]];portConstraint=eastwest;" vertex="1" parent="s7QrAUVHioWoQTtM7XQC-1">
          <mxGeometry y="30" width="120" height="230" as="geometry" />
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-3" value="&lt;div&gt;id&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;name&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;price&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;image&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;description&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;created_at&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;updated_at&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;" style="shape=partialRectangle;html=1;whiteSpace=wrap;connectable=0;strokeColor=inherit;overflow=hidden;fillColor=none;top=0;left=0;bottom=0;right=0;pointerEvents=1;" vertex="1" parent="s7QrAUVHioWoQTtM7XQC-2">
          <mxGeometry width="120" height="230" as="geometry">
            <mxRectangle width="120" height="230" as="alternateBounds" />
          </mxGeometry>
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-4" value="seasonsテーブル" style="shape=table;startSize=30;container=1;collapsible=0;childLayout=tableLayout;" vertex="1" parent="1">
          <mxGeometry x="100" y="80" width="110" height="160" as="geometry" />
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-5" value="" style="shape=tableRow;horizontal=0;startSize=0;swimlaneHead=0;swimlaneBody=0;strokeColor=inherit;top=0;left=0;bottom=0;right=0;collapsible=0;dropTarget=0;fillColor=none;points=[[0,0.5],[1,0.5]];portConstraint=eastwest;" vertex="1" parent="s7QrAUVHioWoQTtM7XQC-4">
          <mxGeometry y="30" width="110" height="130" as="geometry" />
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-6" value="&lt;div&gt;id&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;name&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;created_at&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;updated_at&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;" style="shape=partialRectangle;html=1;whiteSpace=wrap;connectable=0;strokeColor=inherit;overflow=hidden;fillColor=none;top=0;left=0;bottom=0;right=0;pointerEvents=1;" vertex="1" parent="s7QrAUVHioWoQTtM7XQC-5">
          <mxGeometry width="110" height="130" as="geometry">
            <mxRectangle width="110" height="130" as="alternateBounds" />
          </mxGeometry>
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-7" value="product_seasonテーブル" style="shape=table;startSize=30;container=1;collapsible=0;childLayout=tableLayout;" vertex="1" parent="1">
          <mxGeometry x="350" y="80" width="160" height="210" as="geometry" />
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-8" value="" style="shape=tableRow;horizontal=0;startSize=0;swimlaneHead=0;swimlaneBody=0;strokeColor=inherit;top=0;left=0;bottom=0;right=0;collapsible=0;dropTarget=0;fillColor=none;points=[[0,0.5],[1,0.5]];portConstraint=eastwest;" vertex="1" parent="s7QrAUVHioWoQTtM7XQC-7">
          <mxGeometry y="30" width="160" height="180" as="geometry" />
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-9" value="&lt;div&gt;id&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;product_id&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;season_id&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;created_at&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;updated_at&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;" style="shape=partialRectangle;html=1;whiteSpace=wrap;connectable=0;strokeColor=inherit;overflow=hidden;fillColor=none;top=0;left=0;bottom=0;right=0;pointerEvents=1;" vertex="1" parent="s7QrAUVHioWoQTtM7XQC-8">
          <mxGeometry width="160" height="180" as="geometry">
            <mxRectangle width="160" height="180" as="alternateBounds" />
          </mxGeometry>
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-24" value="" style="edgeStyle=entityRelationEdgeStyle;fontSize=12;html=1;endArrow=ERzeroToMany;startArrow=ERmandOne;rounded=0;entryX=-0.021;entryY=0.456;entryDx=0;entryDy=0;entryPerimeter=0;" edge="1" parent="1" target="s7QrAUVHioWoQTtM7XQC-8">
          <mxGeometry width="100" height="100" relative="1" as="geometry">
            <mxPoint x="210" y="120" as="sourcePoint" />
            <mxPoint x="320" y="120" as="targetPoint" />
          </mxGeometry>
        </mxCell>
        <mxCell id="s7QrAUVHioWoQTtM7XQC-26" value="" style="edgeStyle=entityRelationEdgeStyle;fontSize=12;html=1;endArrow=ERzeroToMany;startArrow=ERmandOne;rounded=0;entryX=1.008;entryY=0.278;entryDx=0;entryDy=0;entryPerimeter=0;exitX=-0.028;exitY=0.093;exitDx=0;exitDy=0;exitPerimeter=0;" edge="1" parent="1" source="s7QrAUVHioWoQTtM7XQC-2" target="s7QrAUVHioWoQTtM7XQC-8">
          <mxGeometry width="100" height="100" relative="1" as="geometry">
            <mxPoint x="620" y="130" as="sourcePoint" />
            <mxPoint x="560" y="130" as="targetPoint" />
            <Array as="points">
              <mxPoint x="530" y="180" />
              <mxPoint x="540" y="200" />
            </Array>
          </mxGeometry>
        </mxCell>
      </root>
    </mxGraphModel>
  </diagram>
</mxfile>
R図.drawio…]()　　


## URL　　
-開発環境：http://localhost/　　
-phpMyAdmin：http://localhost:8080　　


 
