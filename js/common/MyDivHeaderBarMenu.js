



class MyDivHeaderBarMenu extends MyInsideDiv
{
  constructor()
  {
    super('my_div_header_bar_menu');
    this.setNameClass('bar_menu');
    this.anchorHome = new MyAnchorBouttonInputBar('anchor_bar_menu_home','Home','Home',()=>{location.href = "../../"});
    this.anchorHome.setNameClass('anchor_bar_menu');
    this.anchorLearn = new MyAnchorBouttonInputBar('anchor_bar_menu_learn','Learn','Learn',()=>{location.href = "/MyDiv-web/learn/learn.php"});
    this.anchorLearn.setNameClass('anchor_bar_menu');
    this.anchorDownload = new MyAnchorBouttonInputBar('anchor_bar_menu_download','Download','Download',()=>{location.href = "/MyDiv-web/download/download.php"});
    this.anchorDownload.setNameClass('anchor_bar_menu');
    this.anchorDevelopement = new MyAnchorBouttonInputBar('anchor_bar_menu_download','Development','Development',()=>{location.href = "/MyDiv-web/development/development.php"});
    this.anchorDevelopement.setNameClass('anchor_bar_menu');
    this.anchorDonate = new MyAnchorBouttonInputBar('anchor_bar_menu_donate','Donate','Donate',()=>{location.href = "/MyDiv-web/donate/donate.php"});
    this.anchorDonate.setNameClass('anchor_bar_menu');

    this.inserInput(this.anchorHome);
    this.inserInput(this.anchorLearn);
    this.inserInput(this.anchorDownload);
    this.inserInput(this.anchorDevelopement);
    this.inserInput(this.anchorDonate);

    this.setFlexDirection('row')
    this.setJustifyContent('space-around');
    this.setDisplay('flex');
  }
}
