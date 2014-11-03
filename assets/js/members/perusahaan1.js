var app = angular.module('myApp', ['ui.bootstrap.typeahead', 'restangular']);

app.config(function(RestangularProvider) {
    RestangularProvider.setBaseUrl('/api/v1');
  });

app.controller('myCtrl', ['$scope','Restangular',function($scope,Restangular){

  $scope.jawa_provinces        = ['Banten', 'Jakarta', 'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'Yogyakarta'];
  $scope.kalimantan_provinces  = ['Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Kalimantan Timur', 'Kalimantan Utara', 'Kapuas Raya'];
  $scope.malukupapua_provinces = ['Maluku', 'Maluku Utara', 'Papua', 'Papua Barat', 'Papua Selatan', 'Papua Tengah', 'Papua Barat Daya'];
  $scope.balinusa_provinces    = ['Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Sumbawa', 'Bali'];
  $scope.sulawesi_provinces    = ['Gorontalo', 'Sulawesi Barat', 'Sulawesi Selatan', 'Sulawesi Tengah', 'Sulawesi Tenggara', 'Sulawesu Utara', 'Bolang'];
  $scope.sumatra_provinces     = ['Aceh', 'Bengkulu', 'Jambi', 'Kepulauan Bangka Belitung', 'Kepulauan Riau', 'Lampung', 'Riau', 'Sumatera Barat', 'Sumatera Selatan', 'Sumatera Utara', 'Tapanuli', 'Kepulauan Nias'];
  
  $scope.jawa_cities           = ['Ambarawa', 'Anyer', 'Bandung', 'Bangil', 'Banjar (Jawa Barat)', 'Banjarnegara', 'Bangkalan', 'Bantul', 'Banyumas', 'Banyuwangi', 'Batang', 'Batu', 'Bekasi', 'Blitar', 'Blora', 'Bogor', 'Bojonegoro', 'Bondowoso', 'Boyolali', 'Bumiayu', 'Brebes', 'Caruban', 'Cianjur', 'Ciamis', 'Cibinong', 'Cikampek', 'Cikarang', 'Cilacap', 'Cilegon', 'Cirebon', 'Demak', 'Depok', 'Garut', 'Gresik', 'Indramayu', 'Jakarta', 'Jember', 'Jepara', 'Jombang', 'Kajen', 'Karanganyar', 'Kebumen', 'Kediri', 'Kendal', 'Kepanjen', 'Klaten', 'Kraksaan', 'Kudus', 'Kuningan', 'Lamongan', 'Lumajang', 'Madiun', 'Magelang', 'Magetan', 'Majalengka', 'Malang', 'Mojokerto', 'Mojosari', 'Mungkid', 'Ngamprah', 'Nganjuk', 'Ngawi', 'Pacitan', 'Pamekasan', 'Pandeglang', 'Pare', 'Pati', 'Pasuruan', 'Pekalongan', 'Pelabuhan Ratu', 'Pemalang', 'Ponorogo', 'Probolinggo', 'Purbalingga', 'Purwakarta', 'Purwodadi', 'Purwokerto', 'Purworejo', 'Rangkasbitung', 'Rembang', 'Salatiga', 'Sampang', 'Semarang', 'Serang', 'Sidayu', 'Sidoarjo', 'Singaparna', 'Situbondo', 'Slawi', 'Sleman', 'Soreang', 'Sragen', 'Subang', 'Sukabumi', 'Sukoharjo', 'Sumber', 'Sumedang', 'Sumenep', 'Surabaya', 'Surakarta', 'Tasikmalaya', 'Tangerang', 'Tangerang Selatan', 'Tegal', 'Temanggung', 'Tigaraksa', 'Trenggalek', 'Tuban', 'Tulungagung', 'Ungaran', 'Wates', 'Wlingi', 'Wonogiri', 'Wonosari', 'Wonosobo', 'Yogyakarta'];
  $scope.kalimantan_cities     = ['Pontianak', 'Samarinda', 'Banjarmasin', 'Balikpapan', 'Singkawang', 'Palangkaraya', 'Mempawah', 'Ketapang', 'Sintang', 'Tarakan', 'Putussibau', 'Sambas', 'Sampit', 'Banjarbaru', 'Barabai', 'Batang Tarang', 'Batulicin', 'Bengkayang', 'Bontang', 'Buntok', 'Kandangan', 'Kotabaru', 'Kuala Kapuas', 'Kuala Kurun', 'Kuala Pembuang', 'Malinau', 'Marabahan', 'Martapura', 'Muara Teweh', 'Nanga Bulik', 'Nanga Pinoh', 'Ngabang', 'Nunukan', 'Pangkalan Bun', 'Paringin', 'Pelaihari', 'Penajam', 'Pulang Pisau', 'Purukcahu', 'Rantau', 'Sangatta', 'Sekadau', 'Sendawar', 'Sukadana', 'Sukamara', 'Sungai Raya', 'Tamiang Layang', 'Tanah Grogot', 'Tanjung', 'Tanjung Selor', 'Tanjung Redeb', 'Tenggarong', 'Tideng Pale'];
  $scope.malukupapua_cities    = ['Ambon', 'Asmat', 'Biak', 'Bintuni', 'Boven Digoel', 'Buru Selatan', 'Buru', 'Deiyai', 'Dogiyai', 'Fakfak', 'Halmahera Barat', 'Halmahera Selatan', 'Halmahera Tengah', 'Halmahera Timur', 'Halmahera Utara', 'Intan Jaya', 'Jayapura', 'Jayapura (kota)', 'Jayawijaya', 'Kaimana', 'Keerom', 'Kepulauan Aru', 'Kepulauan Sula', 'Kepulauan Yapen', 'Lanny Jaya', 'Maluku Barat Daya', 'Maluku Tengah', 'Maluku Tenggara', 'Maluku Tenggara Barat', 'Mamberamo Raya', 'Mamberamo Tengah', 'Manokwari', 'Manokwari Selatan', 'Mappi', 'Maybrat', 'Merauke', 'Mimika', 'Nabire', 'Nduga', 'Paniai', 'Pegunungan Arfak', 'Pegunungan Bintang', 'Pulau Morotai', 'Pulau Taliabu', 'Puncak', 'Puncak Jaya', 'Raja Ampat', 'Sarmi', 'Seram Bagian Barat', 'Seram Bagian Timur', 'Sorong', 'Sorong Selatan', 'Supiori', 'Tambrauw', 'Teluk Bintuni', 'Teluk Wondama', 'Ternate', 'Tidore', 'Tolikara', 'Tual', 'Waropen', 'Yahukimo', 'Yalimo'];
  $scope.balinusa_cities       = ['Atambua', 'Baa', 'Badung', 'Bajawa', 'Bangli', 'Bima', 'Denpasar', 'Dompu', 'Ende', 'Gianyar', 'Kalabahi', 'Karangasem', 'Kefamenanu', 'Klungkung', 'Kupang', 'Labuhan Bajo', 'Larantuka', 'Lewoleba', 'Maumere', 'Mataram', 'Mbay', 'Negara', 'Praya', 'Raba', 'Ruteng', 'Selong', 'Singaraja', 'Soe', 'Sumbawa Besar', 'Tabanan', 'Taliwang', 'Tambolaka', 'Tanjung (Nusa Tenggara Barat)', 'Waibakul', 'Waikabubak', 'Waingapu', 'Denpasar', 'Negara,Bali', 'Singaraja', 'Tabanan', 'Bangli'];
  $scope.sulawesi_cities       = ['Airmadidi', 'Ampana', 'Amurang', 'Andolo', 'Banggai', 'Bantaeng', 'Barru', 'Bau-Bau', 'Benteng', 'Bitung', 'Bolaang Uki', 'Boroko', 'Bulukumba', 'Bungku', 'Buol', 'Buranga', 'Donggala', 'Enrekang', 'Gorontalo', 'Jeneponto', 'Kawangkoan', 'Kendari', 'Kolaka', 'Kotamobagu', 'Kota Raha', 'Kwandang', 'Lasusua', 'Luwuk', 'Majene', 'Makale', 'Makassar (Ujung Pandang)', 'Malili', 'Mamasa', 'Mamuju', 'Manado (Menado)', 'Marisa', 'Maros', 'Masamba', 'Melonguane', 'Ondong Siau', 'Palopo', 'Palu', 'Pangkajene', 'Pare-Pare', 'Parigi', 'Pasangkayu', 'Pinrang', 'Polewali', 'Poso', 'Rantepao', 'Ratahan', 'Rumbia', 'Sengkang', 'Sidenreng', 'Sigi Biromaru', 'Sinjai', 'Sunggu Minasa', 'Suwawa', 'Tahuna', 'Takalar', 'Tilamuta', 'Toli Toli', 'Tomohon', 'Tondano', 'Tutuyan', 'Unaaha', 'Wangi Wangi', 'Wanggudu', 'Watampone', 'Watan Soppeng', 'Cliquers', 'Libuo Palma'];
  $scope.sumatra_cities        = ['Aek Kanopan', 'Arga Makmur', 'Arosuka', 'Balige', 'Banda Aceh', 'Bandar Lampung', 'Bagansiapiapi', 'Baganbatu', 'Bandar Seri Bentan', 'Bangkinang', 'Bangko', 'Banyuasin', 'Batam', 'Baturaja', 'Batusangkar', 'Bengkalis', 'Bengkulu', 'Binjai', 'Bintuhan', 'Bireuen', 'Blambangan Umpu', 'Blangpidie', 'Blang Kejeren', 'Bukittinggi', 'Calang', 'Curup', 'Daik', 'Dolok Marawa', 'Dumai', 'Gedong Tataan', 'Gunung Sitoli', 'Gunun Sugih', 'Gunung Tua', 'Idi Rayeuk', 'Indralaya', 'Jambi', 'Jantho', 'Kabanjahe', 'Kalianda', 'Karang Baru', 'Karang Tinggi', 'Kayu Agung', 'Kepahiang', 'Kisaran', 'Koba', 'Kota Agung', 'Kotabumi', 'Kota Pinang', 'Kuala Tungkal', 'Kutacane', 'Lahat', 'Lahomi', 'Langsa', 'Lhokseumawe', 'Lhoksukon', 'Limapuluh', 'Liwa', 'Lotu', 'Lubuk Basung', 'Lubuk Bendaharo', 'Lubuk Linggau', 'Lubuk Pakam', 'Lubuk Sikaping', 'Manggar', 'Manna', 'Martapura (Sumatera Selatan)', 'Medan', 'Menggala', 'Mentok', 'Metro', 'Meulaboh', 'Meureude', 'Muara Aman', 'Muara Bulian', 'Muara Bungo', 'Muara Dua', 'Muara Enim', 'Muara Sabak', 'Muara Tebo', 'Muaro Sijunjung', 'Muko Muko', 'Padang', 'Padang Aro', 'Padang Panjang', 'Padang Sidempuan', 'Pagaralam', 'Painan', 'Palembang', 'Pandan', 'Pangkalan Kerinci', 'Pangkal Pinang', 'Panguruan', 'Panyabungan', 'Pariaman', 'Parit Malintang', 'Pasir Pengarayan', 'Payakumbuh', 'Pekanbaru', 'Pematang Siantar', 'Prabumulih', 'Pringsewu', 'Pulau Punjung', 'Ranai', 'Rantau Prapat', 'Raya', 'Rengat', 'Sabang', 'Salak', 'Sarila', 'Sarolangun', 'Sawahlunto', 'Sei Rampah', 'Sekayu', 'Selat Panjang', 'Sengeti', 'Siak Sri Indrapura', 'Sibolga', 'Sibuhuan', 'Sidikalang', 'Sigli', 'Simpang Empat', 'Simpang Tiga Redelong', 'Sinabang', 'Singkil', 'Sipirok', 'Solok', 'Stabat', 'Subulussalam', 'Sukadana', 'Suka Makmue', 'Sungailiat', 'Sungai Penuh', 'Takengon', 'Tais', 'Tanjung Balai (Sumatera Utara)', 'Tanjung Balai Karimun (Kepulauan Riau)', 'Tanjung Enim', 'Tanjung Pandan', 'Tanjung Pinang', 'Tapaktuan', 'Tarempa', 'Tarutung', 'Tebing Tinggi (Sumatera Utara)', 'Tebing Tinggi (Sumatera Selatan)', 'Teluk Dalam', 'Teluk Kuantan', 'Tembilahan', 'Toboali', 'Tuapejat', 'Ujung Tanjung'];
  
  var allprovinces             = [];
  $scope.provinces             = allprovinces.concat($scope.jawa_provinces,$scope.kalimantan_provinces,$scope.malukupapua_provinces,$scope.balinusa_provinces,$scope.sulawesi_provinces,$scope.sumatra_provinces);
  
  var allcities                = [];
  $scope.cities                = allcities.concat($scope.jawa_cities,$scope.kalimantan_cities,$scope.malukupapua_cities,$scope.balinusa_cities,$scope.sulawesi_cities,$scope.sumatra_cities);


  
  var utm = Restangular.all('utama');

  $scope.pencet = function() {
    utm.post($scope.user).then(function(msg){
      $scope.message = msg;
      // 
      
      // 
    });
  


/*    utm.getList().then(function(data){

      var specificUsr = data[5];
      editSpecificUsr = Restangular.copy(specificUsr);

      editSpecificUsr.email = 'dodoe@mail.com';

      specificUsr.put();
      editSpecificUsr.put();

      specificUsr.save();


    });*/
  };

  

  /*Restangular.one('users','gamal').get().then(function(data){
    $scope.usr = data;
  });*/

  // $scope.uss = Restangular.all('users').getList().$object;
  
  // console.log(Restangular.all('users').post({username: "qwee",password: "qweqwe", email: "qwe@mail.com"}));


  // var dddd = 
  // $scope.user = {  };
  

}]);


function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return true;
    }
    return false;
}
console.log('form built by mirzalazuardi hermawan (mirzalazuardi@gmail.com) - www.mh-praxis.com - 6th october 2014');