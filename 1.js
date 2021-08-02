
    //deklarasi 
    //jarak 64.5km ke meter
    var s = 64.5 * 1000;
    
    //var kecepatan m/s
    var v1= 3;
    var v2=5;
    var v3= v2 - 3;

    //var waktu menit ke detik. kali 60;
    var t1 =  23*60;
    var t2 = 12*60;


    s -= ((v1*t1)+(v2*t2));
    
    var t3 = s/v3;

    //menjumlahkan semua waktu yang sudah ditempuh dalam satuan detik
    var t = t1 + t2 + t3;

        var jam = Math.floor(t/3600);
        var sisamod = t%3600;
        var menit = sisamod/60;
        var detik = sisamod%60;
    console.log(jam + "jam " +menit + "menit " +detik + "detik");

    


