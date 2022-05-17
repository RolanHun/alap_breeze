$(function() {
    const AjaxhivasK = new MyAjax();
    const kategoriak = [];
    const szuloModellK = $("#kategoriaV");
    const sablonModellK = $("#kategoriaO");
    let apivegpontK = "/api/kategoria";
    AjaxhivasK.getAdat(apivegpontK, kategoriak, kiirK);

    function kiirK() {
        kategoriak.forEach(function(elem) {
            let node = sablonModellK.clone().appendTo(szuloModellK);
            const obj = new Kategoria(node, elem);
        })
        sablonModellK.remove();
    }


    const Ajaxhivas = new MyAjax();
    const kerdesek = [];
    const szuloModell = $(".tesztek");
    const sablonModell = $(".kerdes");
    let apivegpont = "/api/tesztek";
    Ajaxhivas.getAdat(apivegpont, kerdesek, kiir);

    function kiir() {
        kerdesek.forEach(function(elem) {
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Kerdes(node, elem);
        })
        sablonModell.remove();
    }
});

class Kategoria {
    constructor(elem, adat) {
        this.elem = elem;

        this.kategoria = this.elem.children("#kategoriaO");

        this.adat = adat;

        this.setAdat(this.adat);

        this.kategoria.on("change", () => {
            this.kategoriaKattintTrigger();
        });
    }
    kategoriaKattintTrigger() {
        let esemeny = new CustomEvent("kategoria", { detail: this.adat });
        window.dispatchEvent(esemeny);
        console.log(this.adat.id);
    }

    setAdat(ertekek) {
        console.log(ertekek);
    }
}

class Kerdes {
    constructor(elem, adat) {
        this.elem = elem;

        this.kerdes = this.elem.children(".teszt");
        this.valasz1 = this.elem.children("#1");
        this.valasz2 = this.elem.children("#2");
        this.valasz3 = this.elem.children("#3");
        this.valasz4 = this.elem.children("#4");


        this.adat = adat;

        this.setAdat(this.adat);
        let proba = 0;
        if (proba < 1) {
            this.elem.on("click", () => {
                this.tippelKattint1Trigger();
            });
            proba++;
        }
    }

    setAdat(ertekek) {
        this.kerdes.html(ertekek.kerdes);
        this.valasz1.html(ertekek.v1);
        this.valasz2.html(ertekek.v2);
        this.valasz3.html(ertekek.v3);
        this.valasz4.html(ertekek.v4);
    }

    tippelKattint1Trigger() {
        let esemeny = new CustomEvent("tippelés1", { detail: this.adat });
        window.dispatchEvent(esemeny);

        if (Number(this.adat.helyes) === 1) {
            console.log("Yoo");
        } else {
            console.log("bad");
        }
        console.log("klikk");

    }
}