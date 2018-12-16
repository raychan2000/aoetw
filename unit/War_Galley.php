<template>
    <?php include( "head.php"); ?>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row" style=" margin-top: 50px;">
        <div class="col-md-12">
           <h1>弩砲戰船</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>弩砲戰船(或稱加利恩帆船)在城堡時代時可以在碼頭中被訓練，特別的是，它升級前射出的是箭，在升級後弩砲戰船射出的反而比較像攻城器弩砲，但卻不同於
              <a
              href="Carrack.php">卡拉維爾戰船</a>、<a href="Scorpion.php">弩砲</a>，弩砲戰船只能攻擊一個單位，攻擊沒有穿透效果。</p>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>在海戰中，重要的是快速升級到城堡時代、研發弩砲戰船，因為這大大減低了研發戰船的時間(60秒→36秒)，而且因為戰船是海戰中相對比較弱小的攻擊單位，所以非常建議趕快升級成弩砲戰船。</p>
            <p>弩砲戰船在任何海戰中都扮演要角的地位，在好的操作之下弩砲戰船、重型弩砲戰船通常能有效的處理<a href="Demolition_Ship.php">神風船</a>以及
              <a
              href="Cannon_Galleon.php">火炮戰船</a>。除了防禦箭塔、城堡、攻城器具以外，他們還可以用來攻擊敵方海岸邊的建築、敵人。在大多數情況下，弩砲戰船是會與<a href="Fire_Galley.php">火戰船</a>配合，一個打近的一個打遠的，並且對
                <a
                href="Transport_Ship.php">運輸船</a>來說弩砲戰船也是一個很好的保護。</p>
            <p>弩砲戰船最主要是被<a href="Fire_Galley.php">火戰船</a>克制，但在大部分情況下神風船也嚴重地克制弩砲戰船。
              <a
              href="Longboat.php">維京大戰船</a>、<a href="Turtle_Ship.php">龜甲船</a>是嚴重威脅，像是<a href="Trebuchet.php">巨型投石機</a>、
                <a
                href="Onager.php">中型投石車</a>、<a href="Bombard_Cannon.php">火砲</a>也會對艦隊造成毀滅性打擊。
                  <br>另外，僧侶也是一大威脅，特別是沒有研發<a href="Faith.php">忠誠信仰</a>
            </p>
          </div>
          <h3>更多數據</h3>
          <div class="hrn1"></div>
          <div class="n1"></div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4"><a href="Transport_Ship.php">運輸船</a>、<a href="Fishing_Ship.php">漁船</a>、在岸邊的建築物和近戰單位。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><a href="Fire_Galley.php">火戰船</a>、<a href="Turtle_Ship.php">龜甲船</a>、
                <a
                href="Longboat.php">維京大戰船</a>、箭塔、<a href="Castle.php">城堡</a>、在岸邊的攻城器單位。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="img/Fletching.jpg" width="30" alt=""><a href="Fletching.php">箭羽</a>(+1)
                <br>
                <img class="gg" src="img/Bodkinarrow.jpg" width="30" alt=""><a href="Bodkin_Arrow.php">錐狀箭頭</a>(+1)
                <br>
                <img class="gg" src="img/Bracer.jpg" width="30" alt=""><a href="Bracer.php">護腕</a>(+1)
                <br>
                <img class="gg" src="img/Chemistry.jpg" width="30" alt=""><a href="Chemistry.php">化學</a>(+1)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">射程</td>
              <td class="tta4">
                <img class="gg" src="img/Fletching.jpg" width="30" alt=""><a href="Fletching.php">箭羽</a>(+1)
                <br>
                <img class="gg" src="img/Bodkinarrow.jpg" width="30" alt=""><a href="Bodkin_Arrow.php">錐狀箭頭</a>(+1)
                <br>
                <img class="gg" src="img/Bracer.jpg" width="30" alt=""><a href="Bracer.php">護腕</a>(+1)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">命中率</td>
              <td class="tta4">
                <img class="gg" src="img/Ballistics.jpg" width="30" alt=""><a href="Ballistic.php">彈道學</a>:較易擊中移動目標</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">護甲</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="img/Careening.jpg" alt=""><a href="Careening.php">傾側維修術</a>(護甲+0/+1)
                <br>
                <img class="gg" src="img/CastleAgeUnique.png" style="margin: 2px;" alt=""><a href="Carrack.php">克拉克帆船</a>(護甲+1/+1，<a href="Portuguese.php">葡萄牙</a>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="img/Drydock.jpg" alt=""><a href="Dry_Dock.php">旱碼頭</a>(+15%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">抗招降能力</td>
              <td class="tta4">
                <img class="gg" src="img/Faith.jpg" width="22" alt=""><a href="Faith.php">忠誠信仰</a>
                <br>
                <img class="gg" src="img/Heresy.png" width="22" alt=""><a href="Heresy.php">異端邪說</a> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">訓練速度</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Shipwright.jpg" alt=""><a href="Shipwright.php">造船匠</a>(+54%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">造價減少</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Shipwright.jpg" alt=""><a href="Shipwright.php">造船匠</a>(-20%)</td>
            </tr>
          </table>
          <h3>剋弩炮戰船的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對弩炮戰船的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+40攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Bombardtowericon.png" alt=""><a href="Bombard_Tower.php">火炮塔</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/BombardCannonIcon.jpg" alt=""><a href="Bombard_Cannon.php">火砲</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+17攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/HalberdierIcon.jpg" alt=""><a href="Halberdier.php">戟兵</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+16攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/PikemanIcon.jpg" alt=""><a href="Pikeman.php">重裝長槍兵</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/GalleonAoE2.jpg" alt=""><a href="Galleon.php">重型弩炮戰船</a> 
                    </li>
                    <li>
                      <img src="img/LongboatIcon.jpg" alt=""><a href="Longboat.php">精銳維京大戰船</a>(<a href="Vikings.php">維京</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Keep.php">大型箭塔</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/SpearmanIcon.jpg" alt=""><a href="Spearman.php">長槍兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/HeavyCamelIcon.jpg" alt=""> <a href="Heavy_Camel.php">重裝駱駝騎兵</a>→
                      <img class="gg" src="img/ImperialCamelIcon.jpg"
                      alt=""> <a href="Imperial Camel.php">帝王駱駝騎兵</a>(後者<a href="Indians.php">印度</a>限定)</li>
                    <li>
                      <img class="gg" src="img/WarGalley.jpg" width="22" alt=""><a href="War_Galley.php">弩炮戰船</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/LongboatIcon.jpg" alt=""><a href="Longboat.php">維京大戰船</a>(<a href="Vikings.php">維京</a>限定)</li>
                    <li>
                      <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Guard_Tower.php">防禦箭塔</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/Dockicon.png" width="22" alt=""><a href="Dock.php">海港</a>(<a href="Malay.php">馬來</a>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Galley.jpg" alt=""><a href="Galley.php">戰船</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/Ballistaelephanticon.png" alt=""><a href="Ballista_Elephant.php">弩炮象</a>→
                      <img class="gg" src="img/Ballistaelephanticon.png"
                      alt=""><a href="Ballista_Elephant.php">精銳弩炮象</a>(<a href="Khmer.php">高棉</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/CaravelIcon2.jpg" alt=""><a href="Caravel.php">精銳卡拉維爾戰船</a>(<a href="Portuguese.php">葡萄牙</a>限定)</li>
                    <li>
                      <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Watch_Tower.php">瞭望箭塔</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/CaravelIcon2.jpg" alt=""><a href="Caravel.php">卡拉維爾戰船</a>(<a href="Portuguese.php">葡萄牙</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/CamelIcon.jpg" alt=""><a href="Camel.php">駱駝騎兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/New_Genoese_Crossbowman.png" alt=""><a href="Genoese_Crossbowman.php">精銳熱那亞弩手</a>(<a href="Italians.php">義大利</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/New_Genoese_Crossbowman.png" alt=""><a href="Genoese_Crossbowman.php">熱那亞弩手</a>(<a href="Italians.php">義大利</a>限定)</li>
                    <li>
                      <img class="gg" src="img/FastFireShipIcon.jpg" alt=""><a href="Fast_Fire_Ship.php">快速火戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/FireGalleyIcon.jpg" alt=""><a href="Fire_Galley.php">火蒙衝</a>→
                      <img class="gg" src="img/FireShipIcon.jpg"
                      width="22" alt=""><a href="Fire_Ship.php">火戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/EliteEagleWarriorIcon.jpg" alt=""><a href="Elite_Eagle_Warrior.php">精銳鷹勇士</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+1攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/EagleWarriorIcon.jpg" alt=""><a href="Eagle_Warrior.php">鷹勇士</a> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>以下技術可讓以下單位對弩炮戰船有額外攻擊力
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <img src="img/Heatedshot.png" width="22" alt=""><a href="Heated_Shot.php">預熱射擊</a> 
                <div style="margin:12px 0px;"><strong>+13攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Keep.php">大型箭塔</a> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Guard_Tower.php">防禦箭塔</a> 
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Watch_Tower.php">瞭望箭塔</a> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Castleicon.png" width="22" alt=""><a href="Castle.php">城堡</a> 
                  </li>
                  <li>
                    <img class="gg" src="img/Dockicon.png" width="22" alt=""><a href="Harbor.php">海港</a>(<a href="Malay.php">馬來</a>限定)</li>
                </ul>
              </div>
            </div>
          </div>
           <h3>文明加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Berbers.php">阿茲特克</a>：弩炮戰船訓練速度提高15%。</li>
              <li><a href="Berbers.php">柏柏</a>：弩炮戰船移動速度提高10％。</li>
              <li><a href="Byzantines.php">緬甸</a>：研究<a href="Faith.php">忠誠信仰</a>便宜50％。</li>
              <li><a href="Celts.php">賽爾特</a>：在視野內的動物不會被轉化</li>
              <li><a href="Chinese.php">中國</a>：有利於弩炮戰船科技在城堡/帝王便宜15%/20％</li>
              <li><a href="Italians.php">義大利</a>：研究<a href="Careening.php">傾側維修術</a>，
                <a
                href="Dry Dock.php">旱碼頭</a>和<a href="Shipwright.php">造船匠</a>便宜50％，升級到弩砲戰船便宜50%。</li>
              <li><a href="Persians.php">波斯</a>：弩炮戰船訓練的速度在城堡/帝王提高15%/20%，<a href="Careening.php">傾側維修術</a>和弩砲戰船的研究速度在城堡/帝王提高15%/20％。研究
                <a
                href="Dry Dock.php">旱碼頭</a>的速度快20％。</li>
              <li><a href="Portuguese.php">葡萄牙</a>：弩炮戰船訓練減少15%黃金成本，弩炮戰船+10％HP。</li>
              <li><a href="Saracens.php">薩拉森</a>：弩炮戰船攻擊速度提高25%。</li>
              <li><a href="Spanish.php">西班牙</a>：在兵工廠升級有利於弩炮戰船的科技不消耗黃金。</li>
              <li><a href="Turks.php">土耳其</a>：<a href="Chemistry.php">化學</a>免費。</li>
              <li><a href="Vikings.php">維京</a>：弩炮戰船在城堡/帝王時代便宜15%/20%。</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Japanese.php">日本</a>：弩炮戰船擁有+50%的視野距離。</li>
              <li><a href="Malians.php">馬利</a>：研究<a href="Chemistry.php">化學</a>、<a href="Ballistic.php">彈道學</a>的速度提高80%</li>
              <li><a href="Teutons.php">條頓</a>：弩炮戰船對招降的抵抗力更強。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="aok.php">世紀帝國</a></em></h3>
            <ul>
              <li>戰船訓練時間為36秒。</li>
              <li><a href="Shipwright.php">造船匠</a>減少20%船隻木材成本。</li>
              <li><a href="Vikings.php">維京</a>:弩炮戰船成本便宜20%。</li>
            </ul>
            <h3><em><a href="aoc.php">征服者入侵</a></em></h3>
            <ul>
              <li>戰船現在訓練時間為60秒。</li>
              <li>1.0版本<a href="Shipwright.php">造船匠</a>還可減少35%的船隻訓練時間。</li>
              <li>引入<a href="Heresy.php">異端邪說</a>。</li>
            </ul>
            <h3><em><a href="aof.php">失落的帝國</a></em></h3>
            <ul>
              <li><a href="Vikings.php">維京</a>：弩炮戰船在封建/城堡/帝王時代便宜10%/15%/20%</li>
            </ul>
          </div>
           <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>弩炮戰船是遊戲中唯四升級後所有文明都可使用的單位之一(其他三個分別是<a href="Man-at-Arms.php">裝甲步兵</a>、
                <a
                href="Long_Swordsman.php">長劍兵</a>和<a href="Capped_Ram.php">裝甲衝撞車</a>)。</li>
              <li>弩炮戰船會對作弊單位中的<a href="Saboteur.php">破壞者</a>有額外攻擊加成(從<a href="aoc.php">征服者入侵</a>資料片開始)，因為該單位屬於船隻單位。</li>
            </ul>
          </div>
          <h3>歷史</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <div class="ien">
              <p>弩炮戰船是一艘更大更完善的戰鬥艦。它擁有更多的海軍隊員和弓箭手。必要時，也可透過將戰鬥塔放置在交易船的船尾和船頭上來變成弩炮戰船。 這些設置可以在敵船靠近的時候提供弓箭手更好的保護和高度優勢。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><a href="">弩砲戰船</a>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="img/WarGalley.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">單位介紹</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><a href="Naval_Vessels.php">船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">所有文明</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="img/Castle-age-reseach.jpg" alt=""><a href="Castle_Age.php">城堡時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" src="img/Dockicon.png" alt=""><a href="Dock.php">碼頭</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">36秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">成本</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木</td>
              <td class="unit4">90</td>
            </tr>
            <tr>
              <td class="unit3">金</td>
              <td class="unit4">30</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">數據</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">135</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">7(遠攻)</td>
            </tr>
            <tr>
              <td class="unit3">傷害加成</td>
              <td class="unit4">+9對<a href="Armor_Class_Ship.php">船</a>
                <br>+7對<a href="Armor_class_building.php">建築</a>
                <br>+4對<a href="Armor_Class_Ram.php">衝撞車</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">射速</td>
              <td class="unit4">3.05秒/次</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">攻擊距離</td>
              <td class="unit4">6</td>
            </tr>
            <tr>
              <td class="unit3">準確率</td>
              <td class="unit4">100%</td>
            </tr>
            <tr>
              <td class="unit3">投射物速度</td>
              <td class="unit4">6</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">6</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><a href="Armor_Class_Ship.php">船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.43</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">8</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">單位演變</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">從升級</td>
              <td class="unit4">
                <img class="gg" src="img/Galley.jpg" alt=""><a href="War_Galley.php">戰船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="img/GalleonAoE2.jpg" alt=""><a href="Galleon.php">重型弩砲戰船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="img/Galleon-research.jpg" alt="">400食物315黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">65秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由莊晉瑋協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <a href="img/Galleyline.png"><img class="imgn" class="hg" src="img/Galleyline.png" alt=""></a> 
                <p><em>戰船系列(戰船在中間)。</em>
                </p>
              </div>
              <div class="col-md-4"> <a href="img/Wargalley.png"><img class="imgn" class="hg" src="img/Wargalley.png" alt=""></a> 
                <p><em>一群弩炮戰船。</em>
                </p>
              </div>
              <div class="col-md-4"> <a href="img/WarGalleyHD.png"><img class="imgn" class="hg" src="img/WarGalleyHD.png" alt=""></a> 
                <p><em>各種弩炮戰船(世紀帝國和征服者入侵資料片)。</em>
                </p>
              </div>
              <div class="col-md-12">
                <div class="col-md-4"> <a href="img/WarGalleyDLC.png"><img class="imgn" class="hg" src="img/WarGalleyDLC.png" alt=""></a> 
                  <p><em>各種弩炮戰船(HD擴充資料片)。</em>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- /container -->
          <?php include( "allunit.php"); ?>
          <?php include( "footn.php"); ?>
  </body>

</html>