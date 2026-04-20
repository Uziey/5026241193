<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 JS Toast Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginpage.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .toast-container { position: fixed; z-index: 9999; padding: 20px; display: flex; flex-direction: column; gap: 10px; width: 100%; max-width: 450px; pointer-events: none; }
[data-position="tr"] { top: 0; right: 0; align-items: flex-end; }
[data-position="tc"] { top: 0; left: 50%; transform: translateX(-50%); align-items: center; }
[data-position="tl"] { top: 0; left: 0; align-items: flex-start; }
[data-position="br"] { bottom: 0; right: 0; align-items: flex-end; flex-direction: column-reverse; }
[data-position="bc"] { bottom: 0; left: 50%; transform: translateX(-50%); align-items: center; flex-direction: column-reverse; }
[data-position="bl"] { bottom: 0; left: 0; align-items: flex-start; flex-direction: column-reverse; }

.toast {
    position: relative; overflow: hidden; display: flex; gap: 12px; min-width: 320px; max-height: 80px;
    padding: 16px; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    pointer-events: auto;
}

.toast.toast-success {
    --toast-accent-color: #16a34a;
    background: #16a34a !important;
    color: #ffffff !important;
}
.toast.toast-error {
    --toast-accent-color: #dc2626;
    background: #dc2626 !important;
    color: #ffffff !important;
}
.toast.toast-warning {
    --toast-accent-color: #f59e0b;
    background: #f59e0b !important;
    color: #ffffff !important;
}
.toast.toast-info {
    --toast-accent-color: #3b82f6;
    background: #3b82f6 !important;
    color: #ffffff !important;
}

.toast-icon { display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.style-accent .toast-icon, .style-bordered .toast-icon, .style-minimal .toast-icon { color: var(--toast-accent-color); }

.toast-close { background: none; border: none; color: inherit; cursor: pointer; font-size: 1.4rem; opacity: 0.4; line-height: 1; padding: 0; margin-left: auto; transition: opacity 0.2s; align-self: flex-start; }
.toast-close:hover { opacity: 1; }

.style-accent { border: 1px solid var(--toast-accent-color); border-left: 6px solid var(--toast-accent-color); }
.style-bordered { border: 2px solid var(--toast-accent-color); }

.toast-progress { position: absolute; bottom: 0; left: 0; height: 5px; width: 100%; background: var(--toast-accent-color); opacity: 0.3; transform-origin: left; z-index: 10; transform: scaleX(1); }
.style-solid .toast-progress { background: rgba(255,255,255,0.7); opacity: 1; }

/* Animations */
@keyframes slideInRight { from { transform: translateX(120%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
@keyframes slideOutRight { to { transform: translateX(120%); opacity: 0; } }
@keyframes slideInLeft { from { transform: translateX(-120%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
@keyframes slideOutLeft { to { transform: translateX(-120%); opacity: 0; } }
@keyframes slideInDown { from { transform: translateY(-100%); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
@keyframes slideOutUp { to { transform: translateY(-100%); opacity: 0; } }
@keyframes slideInUp { from { transform: translateY(100%); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
@keyframes slideOutDown { to { transform: translateY(100%); opacity: 0; } }
@keyframes shake { 0%, 100% { transform: translateX(0); } 25% { transform: translateX(-8px); } 75% { transform: translateX(8px); } }
@keyframes zoomIn { from { transform: scale(0.8); opacity: 0; } to { transform: scale(1); opacity: 1; } }


.buttoni {
    width: auto;
    height: 48px;
    background: #32e0ec;
    color: #1a1a2e;
    font-family: 'IBM Plex Sans', sans-serif;
    font-size: 16px;
    font-weight: 600;
    border-radius: 8px;
    padding: 12px 24px;
    transition: all 0.3s ease;
    cursor: pointer;
    display: inline-flex;
    user-select: auto;
    position: relative;
    overflow: hidden;
    align-items: center;
    justify-content: center;
    line-height: 1;
}

.buttoni:hover {
    transform: translateY(-3px);
    background: #e94560;
    color: #ffffff;
}

.buttoni:active {
    transform: scale(0.96);
}
</style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Muhammad Ziyaad Syafiq</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <div style="background-color: beige;" class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Latihan JavaScript Toast</h1>
                <p class="lead">Tugas Week 3</p>
                <hr class="my-2">
                <p>More info about JS Toast W3School</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg"
                        href="https://www.w3schools.com/bootstrap4/bootstrap_ref_js_toasts.asp" target="_blank"
                        role="button">W3School JS Toast</a>
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary" id="toastberhasil">Show Toast</button>
        <button type="button" class="btn btn-danger" id="toastdanger">Hide Toast</button>
        <button type="button" class="btn btn-warning" id="toastwarning">Dispose Toast</button>
    </div>

    <!-- FORM -->
    <div class="container">
        <form id="formSaya">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                <small class="form-text text-muted">Help text</small>
            </div>

            <div class="form-group">
                <label for="nama">Nama / Password</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
            </div>

            <button type="submit" class="buttoni">Submit</button>
        </form>
    </div>

    <!-- TOAST NOTIF -->

    </div>
    <script>
        class Toast {
            constructor(pos = 'tc', maxStack = 3) {
                this.maxStack = maxStack;
                this.container = document.querySelector(`.toast-container[data-position="${pos}"]`);
                if (!this.container) {
                    this.container = document.createElement('div');
                    this.container.className = 'toast-container';
                    this.container.dataset.position = pos;
                    document.body.appendChild(this.container);
                }
            }

            show(type, title, msg, duration = 4000) {
                const activeToasts = this.container.querySelectorAll('.toast');
                if (activeToasts.length >= this.maxStack) {
                    activeToasts[0].remove();
                }

                const t = document.createElement('div');
                t.className = `toast style-solid toast-${type}`;
                t.innerHTML = `
      <div class="toast-icon">${this.getIcon(type)}</div>
      <div class="toast-content"><b>${title}</b><div>${msg}</div></div>
      <button class="toast-close">&times;</button>
      <div class="toast-progress"></div>`;

                const animMode = 'slide';
                const baseEntry = 'slideInDown';

                if (animMode === 'zoom') {
                    t.style.animation = 'zoomIn 0.4s forwards';
                } else if (animMode === 'shake') {
                    t.style.animation = `${baseEntry} 0.4s forwards, shake 0.4s 0.4s`;
                } else {
                    t.style.animation = `${baseEntry} 0.4s forwards`;
                }

                this.container.appendChild(t);

                const currentPos = this.container.dataset.position;
                let animOut = currentPos.includes('r') ? 'slideOutRight' : 'slideOutLeft';
                if (currentPos === 'tc') animOut = 'slideOutUp';
                if (currentPos === 'bc') animOut = 'slideOutDown';

                const bar = t.querySelector('.toast-progress');
                if (bar) {
                    bar.style.transform = 'scaleX(1)';
                    setTimeout(() => {
                        bar.style.transition = `transform ${duration}ms linear`;
                        bar.style.transform = 'scaleX(0)';
                    }, 50);
                }

                const dismiss = () => {
                    t.style.animation = `${animOut} 0.3s forwards`;
                    t.addEventListener('animationend', () => t.remove());
                };

                t.querySelector('.toast-close').onclick = dismiss;
                setTimeout(dismiss, duration);
            }

            getIcon(type) {
                const icons = {
                    "success": "<svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 6 9 17l-5-5\"/></svg>",
                    "error": "<svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"m15 9-6 6\"/><path d=\"m9 9 6 6\"/></svg>",
                    "warning": "<svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z\"/><path d=\"M12 9v4\"/><path d=\"M12 17h.01\"/></svg>",
                    "info": "<svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M12 16v-4\"/><path d=\"M12 8h.01\"/></svg>"
                };
                return icons[type];
            }
        }

        document.getElementById("formSaya").addEventListener("submit", function(e) {

            let nama = document.getElementById("nama").value.trim();
            let email = document.getElementById("email").value.trim();

            if (nama === "" || email === "") {
                e.preventDefault();
                const myToast = new Toast();
                myToast.show('warning', 'Isi semua kolom!', 'Isi sesuai aturan');
            } else {

                e.preventDefault();
                const myToast = new Toast();
                myToast.show('success', 'Form submitted successfully!', 'Thank you!');
            }
        });

        document.getElementById("toastberhasil").addEventListener("click", function() {
            const myToast = new Toast();
            myToast.show('success', 'Toast berhasil ditampilkan!', 'Selamat!');
        });
        document.getElementById("toastdanger").addEventListener("click", function() {
            const myToast = new Toast();
            myToast.show('error', 'Toast berhasil ditampilkan!', 'Ini toast error atau dan danger');
        });
        document.getElementById("toastwarning").addEventListener("click", function() {
            const myToast = new Toast();
            myToast.show('warning', 'Isi semua kolom!', 'Ini Toast Warning');;
        });
    </script>
    <div class="toast-container margin-5"></div>

</body>
<footer>
    <p><br><br></p>
</footer>

</html>
