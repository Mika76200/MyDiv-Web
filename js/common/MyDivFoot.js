


class MyDivFoot extends MyInsideDivHorizontal
{
  constructor()
  {
    super('foot_container');

    this.anchorDonate = new MyAnchorBouttonInputBar('anchor_bar_menu_home','Donate -','Donate',()=>{location.href = "/MyDiv-web/donate/donate.php"});
    this.anchorDonate.setNameClass('about');
    this.anchorDonate.deleteMargin();
    this.anchorGitHub = new MyAnchorBouttonInputBar('anchor_bar_menu_download','GitHub -','GitHub',()=>{location.href = "https://github.com/Mika76200/MyDiv.js"});
    this.anchorGitHub.setNameClass('about');
    this.anchorGitHub.deleteMargin();
    this.anchorAbout = new MyAnchorBouttonInputBar('anchor_bar_menu_learn','About','About',()=>{location.href = "/MyDiv-web//about/about.php"});
    this.anchorAbout.setNameClass('about');
    this.anchorAbout.deleteMargin();

    this.inserInput(this.anchorDonate);
    this.inserInput(this.anchorGitHub);
    this.inserInput(this.anchorAbout);

  }
}
