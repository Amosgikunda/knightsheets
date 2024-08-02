class MyHeader extends HTMLElement {
    connectedCallback(){
        this.innerHTML = 
        <header>
        <nav>
            <div class="logo">
                Knight Sheets
            </div>
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Excel To PDF</a></li>
                <li><a href="#">Diff Checker</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>
    
    }
}
customElements.define('my-header', MyHeader)