<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, "arial ce", arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, verdana, "arial ce", arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajtów', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Nie', 'Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob');
$month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s dni, %s godzin, %s minut i %s sekund';

$strAPrimaryKey = 'Do %s dodany został klucz podstawowy';
$strAbortedClients = 'Przerwane';
$strAbsolutePathToDocSqlDir = 'Proszę podać bezwzględną ścieżkę na serwerze www do katalogu docSQL';
$strAccessDenied = 'Brak dostępu';
$strAccessDeniedExplanation = 'phpMyAdmin próbował połączyć się z serwerem MySQL, a serwer odrzucił połączenie. Powinieneś sprawdzić nazwę hosta, nazwę użytkownika i hasło w pliku config.inc.php i upewnić się, że odpowiadają one informacjom danym przez administratora serwera MySQL.';
$strAction = 'Działanie';
$strAddAutoIncrement = 'Dodanie wartości AUTO_INCREMENT';
$strAddDeleteColumn = 'Dodanie/usunięcie pól';
$strAddDeleteRow = 'Dodanie/usunięcie wierszy kryteriów';
$strAddDropDatabase = 'Dodanie DROP DATABASE';
$strAddIntoComments = 'Dodanie do komentarzy';
$strAddNewField = 'Dodanie nowego pola';
$strAddPriv = 'Dodanie nowych uprawnień';
$strAddPrivMessage = 'Nowe uprawnienia zostały dodane.';
$strAddPrivilegesOnDb = 'Dodaj uprawnienia dla następującej bazy danych';
$strAddPrivilegesOnTbl = 'Dodaj uprawnienia dla następującej tabeli';
$strAddSearchConditions = 'Dodanie warunków przeszukiwania (warunek dla "where"):';
$strAddToIndex = 'Dodanie &nbsp;%s&nbsp;kolumn do indeksu ';
$strAddUser = 'Dodanie nowego użytkownika';
$strAddUserMessage = 'Nowy użytkownik został dodany.';
$strAddedColumnComment = 'Został dodany komentarz dla kolumny';
$strAddedColumnRelation = 'Została dodana relacja dla kolumny';
$strAdministration = 'Administracja';
$strAffectedRows = 'Zmodyfikowanych rekordów:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Powrót';
$strAfterInsertNewInsert = 'Wstawienie nowego rekordu';
$strAll = 'Wszystko';
$strAllTableSameWidth = 'wyświetlić wszystkie tabele z taką samą szerokością?';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnIndex = 'Do %s dodany został indeks';
$strAnalyzeTable = 'Analizowanie tabeli';
$strAnd = 'Oraz';
$strAny = 'Dowolny';
$strAnyColumn = 'Dowolna kolumna';
$strAnyDatabase = 'Dowolna baza danych';
$strAnyHost = 'Dowolny host';
$strAnyTable = 'Dowolna tabela';
$strAnyUser = 'Dowolny użytkownik';
$strArabic = 'Arabski';
$strArmenian = 'Ormiański';
$strAscending = 'Rosnąco';
$strAtBeginningOfTable = 'Na początku tabeli';
$strAtEndOfTable = 'Na końcu tabeli';
$strAttr = 'Atrybuty';
$strAutodetect = 'Autodetekcja';
$strAutomaticLayout = 'Układ automatyczny';

$strBack = 'Powrót';
$strBaltic = 'Bałtycki';
$strBeginCut = 'TNIJ STĄD';
$strBeginRaw = 'SUROWE DANE STĄD';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBookmarkAllUsers = 'Pozwolenie na dostęp do zapytania przez każdego użytkownika';
$strBookmarkDeleted = 'Zapamiętane zapytanie SQL zostało usunięte.';
$strBookmarkLabel = 'Nazwa';
$strBookmarkOptions = 'Opcje zapamiętanych zapytań';
$strBookmarkQuery = 'Zapamiętane zapytanie SQL';
$strBookmarkThis = 'Zapamiętanie zapytania SQL';
$strBookmarkView = 'Tylko do pokazania';
$strBrowse = 'Przeglądanie';
$strBrowseForeignValues = 'Przeglądanie zewnętrznych wartości';
$strBulgarian = 'Bułgarski';
$strBzError = 'phpMyAdminowi nie udało się skompresować zrzutu z powodu zepsutego rozszerzenia Bz2 w tej wersji php. Jest bardzo zalecane by ustawić dyrektywę <code>$cfg[\'BZipDump\']</code> w pliku konfiguracyjnym phpMyAdmina na <code>FALSE</code>. Jeśli chcesz użyć funkcji kompresji Bz2, php powinien zostać zaktualizowany do najnowszej wersji. Szczegóły można zobaczyć w raporcie na temat błędów php %s.';
$strBzip = '".bz2"';

$strCSVOptions = 'Opcje CSV';
$strCannotLogin = 'Nie udało się zalogować na serwer MySQL';
$strCantLoad = 'nie udało się załadować modułu %s,<br />proszę sprawdzić konfigurację PHP';
$strCantLoadMySQL = 'nie można załadować modułu MySQL,<br />proszę sprawdzić konfigurację PHP.';
$strCantLoadRecodeIconv = 'Nie udało się załadować rozszerzeń iconv lub recode, które są niezbędne do konwersji kodowania znaków, skonfiguruj php tak, by mógł używać tych rozszerzeń albo zablokuj konwersję kodowania znaków w phpMyAdminie.';
$strCantRenameIdxToPrimary = 'Nie można zmienić nazwy indeksu na PRIMARY!';
$strCantUseRecodeIconv = 'Nie udało się użyć ani funkcji iconv, ani libiconv, mimo że rozszerzenia zgłaszają się jako załadowane. Sprawdź swoją konfigurację php.';
$strCardinality = 'Moc';
$strCarriage = 'Znak powrotu: \\r';
$strCaseInsensitive = 'bez rozróżniania wielkości liter';
$strCaseSensitive = 'z rozróżnianiem wielkości liter';
$strCentralEuropean = 'Środkowoeuropejski';
$strChange = 'Zmiana';
$strChangeCopyMode = 'Utworzenie nowego użytkownika z takimi samymi uprawnieniami i ...';
$strChangeCopyModeCopy = '... pozostawienie starego.';
$strChangeCopyModeDeleteAndReload = ' ... usunięcie starego z tabel użytkowników, a następnie przeładowanie uprawnień.';
$strChangeCopyModeJustDelete = ' ... usunięcie starego z tabel użytkowników.';
$strChangeCopyModeRevoke = ' ... odebranie wszystkich aktywnych uprawnień staremu, a następnie jego usunięcie.';
$strChangeCopyUser = 'Zmień dane użytkownika / Skopiuj użytkownika';
$strChangeDisplay = 'Wybierz wyświetlane pole';
$strChangePassword = 'Zmiana hasła';
$strCharset = 'System kodowania znaków';
$strCharsetOfFile = 'System kodowanie znaków dla pliku:';
$strCharsets = 'Systemy kodowania znaków';
$strCharsetsAndCollations = 'Systemy kodowania znaków i porównań';
$strCheckAll = 'Zaznaczenie wszystkich';
$strCheckDbPriv = 'Sprawdzanie uprawnień bazy danych';
$strCheckPrivs = 'Sprawdzenie uprawnień';
$strCheckPrivsLong = 'Sprawdzenie uprawnień dla bazy danych &quot;%s&quot;.';
$strCheckTable = 'Sprawdzanie tabeli';
$strChoosePage = 'Proszę wybrać stronę do edycji';
$strColComFeat = 'Wyświetlanie komentarzy dla kolumn';
$strCollation = 'System porównań';
$strColumn = 'Kolumna';
$strColumnNames = 'Nazwy kolumn';
$strColumnPrivileges = 'Uprawnienia specyficzne dla kolumn';
$strCommand = 'Polecenie';
$strComments = 'Komentarze';
$strCompleteInserts = 'Pełne dodania';
$strCompression = 'Kompresja';
$strConfigFileError = 'phpMyAdmin nie zdołał odczytać Twojego pliku konfiguracj!<br />Może się to zdarzyć, jeśli php znajdzie w nim błąd składniowy lub nie może znaleźć tego pliku.<br />Proszę wywołać bezpośrednio plik konfiguracyjny używając poniższego linku i odczytać otrzymane komunikat(y) o błędach. W większości przypadków brakuje gdzieś cudzysłowu lub średnika.<br />Jeżeli otrzymasz pustą stronę, wszystko jest w porządku.';
$strConfigureTableCoord = 'Proszę skonfigurować współrzędnie dla tabeli %s';
$strConfirm = 'Czy na pewno to zrobić?';
$strConnections = 'Połączenia';
$strConstraintsForDumped = 'Ograniczenia dla zrzutów tabel';
$strConstraintsForTable = 'Ograniczenia dla tabeli';
$strCookiesRequired = 'Odtąd musi być włączona obsługa "cookies".';
$strCopyTable = 'Skopiuj tabelę do (bazadanych<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s została skopiowana do %s.';
$strCopyTableSameNames = 'Nie można skopiować tabeli do niej samej!';
$strCouldNotKill = 'phpMyAdminowi nie udało się unicestwić wątku %s. Prawdopodobnie został on już zamknięty.';
$strCreate = 'Utworzenie';
$strCreateIndex = 'Utworzenie indeksu dla %s kolumn';
$strCreateIndexTopic = 'Utworzenie nowego indeksu';
$strCreateNewDatabase = 'Utworzenie nowej bazy danych';
$strCreateNewTable = 'Utworzenie nowej tabeli dla bazy danych %s';
$strCreatePage = 'Utworzenie nowej strony';
$strCreatePdfFeat = 'Tworzenie PDF-ów';
$strCriteria = 'Kryteria';
$strCroatian = 'Chorwacki';
$strCyrillic = 'Cyrylica';
$strCzech = 'Czeski';

$strDBComment = 'Komentarz bazy danych: ';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'ID kontekstu';
$strDBGHits = 'Trafienia';
$strDBGLine = 'Linia';
$strDBGMaxTimeMs = 'Maksymalny czas, ms';
$strDBGMinTimeMs = 'Minimalny czas, ms';
$strDBGModule = 'Moduł';
$strDBGTimePerHitMs = 'Czas/trafienie, ms';
$strDBGTotalTimeMs = 'Całkowity czas, ms';
$strDanish = 'Duński';
$strData = 'Dane';
$strDataDict = 'Słownik danych';
$strDataOnly = 'Tylko dane';
$strDatabase = 'Baza danych ';
$strDatabaseExportOptions = 'Opcje eksportu bazy danych';
$strDatabaseHasBeenDropped = 'Baza danych %s została usunięta.';
$strDatabaseNoTable = 'Ta baza danych nie zawiera żadnej tabeli!';
$strDatabaseWildcard = 'Baza danych (dozwolone maski):';
$strDatabases = 'Bazy danych';
$strDatabasesDropped = '%s baz danych zostało pomyślnie usuniętych.';
$strDatabasesStats = 'Statystyki baz danych';
$strDatabasesStatsDisable = 'Wyłączenie statystyk';
$strDatabasesStatsEnable = 'Włączenie statystyk';
$strDatabasesStatsHeavyTraffic = 'Uwaga: Włączenie statystyk baz danych może spowodować duży ruch pomiędzy serwerem www a serwerem MySQL.';
$strDbPrivileges = 'Uprawnienia specyficzne dla baz danych';
$strDbSpecific = 'specyficzne dla bazy danych';
$strDefault = 'Domyślnie';
$strDefaultValueHelp = 'Dla wartości domyślnych, proszę wprowadzić po prostu pojedynczą wartość, bez cytowania odwrotnym ukośnikiem czy ujmowania w cudzysłowy, używając takiego formatu: a';
$strDelOld = 'Aktualna strona ma powiązania z tabelą, która już nie istnieje. Czy chcesz usunąć te powiązania?';
$strDelete = 'Skasowanie';
$strDeleteAndFlush = 'Usunięcie użytkowników, a następnie przeładowanie uprawnień.';
$strDeleteAndFlushDescr = 'Jest to najzgrabniejszy sposób, ale przeładowanie uprawnień może potrwać jakiś czas.';
$strDeleteFailed = 'Kasowanie nie powiodło się!';
$strDeleteUserMessage = 'Usunięto użytkownika %s.';
$strDeleted = 'Rekord został skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDeleting = 'Usuwanie %s';
$strDescending = 'Malejąco';
$strDescription = 'Opis';
$strDictionary = 'słownik';
$strDisabled = 'wyłączone';
$strDisplay = 'Pokaż';
$strDisplayFeat = 'Funkcje wyświetlania';
$strDisplayOrder = 'Kolejność wyświetlania:';
$strDisplayPDF = 'Wyświetl schemat PDF';
$strDoAQuery = 'Wykonaj "zapytanie przez przykład" (znak globalny: "%")';
$strDoYouReally = 'Czy na pewno wykonać ';
$strDocu = 'Dokumentacja';
$strDrop = 'Usunięcie';
$strDropDB = 'Usunięcie bazy danych %s';
$strDropSelectedDatabases = 'Usunięcie wybranych baz danych';
$strDropTable = 'Usunięcie tabeli';
$strDropUsersDb = 'Usunięcie baz danych o takich samych nazwach jak użytkownicy.';
$strDumpComments = 'Włączenie komentarzy kolumn jako wplatanych komentarzy SQL';
$strDumpSaved = 'Zrzut został zapisany do pliku %s.';
$strDumpXRows = 'Zrzuć %s wierszy zaczynając od wiersza %s.';
$strDumpingData = 'Zrzut danych tabeli';
$strDynamic = 'zmienny';

$strEdit = 'Edycja';
$strEditPDFPages = 'Edycja stron PDF';
$strEditPrivileges = 'Edycja uprawnień';
$strEffective = 'Efektywne';
$strEmpty = 'Wyczyszczenie';
$strEmptyResultSet = 'MySQL zwrócił pusty wynik (np. zero rekordów).';
$strEnabled = 'włączone';
$strEnd = 'Koniec';
$strEndCut = 'TNIJ DOTĄD';
$strEndRaw = 'SUROWE DANE DOTĄD';
$strEnglish = 'Angielski';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL są oznaczone w jęz. angielskim ';
$strError = 'Błąd';
$strEstonian = 'Estoński';
$strExcelOptions = 'Opcje Excela';
$strExecuteBookmarked = 'Wykonanie zapamiętanego zapytania';
$strExplain = 'Wyjaśnienie SQL';
$strExport = 'Eksport';
$strExportToXML = 'Eksport do formatu XML';
$strExtendedInserts = 'Rozszerzone dodania';
$strExtra = 'Dodatkowy';

$strFailedAttempts = 'Nieudane próby';
$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s zostało usunięte';
$strFields = 'Pola';
$strFieldsEmpty = ' Liczba pól jest pusta! ';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFileAlreadyExists = 'Plik %s już istnieje na serwerze, zmień nazwę pliku lub zaznacz opcję nadpisywania plików.';
$strFileCouldNotBeRead = 'Nie można odczytać pliku';
$strFileNameTemplate = 'Szablon nazwy';
$strFileNameTemplateHelp = 'Jako nazwy bazy danych użyj __DB__, __TABLE__ jako nazwy tabeli, a by określić czas - dowolnych opcji %sstrftime%s; rozszerzenia zostaną dodane automatycznie. Każdy inny tekst zostanie zachowany.';
$strFileNameTemplateRemember = 'zapamiętanie szablonu';
$strFixed = 'stały';
$strFlushPrivilegesNote = 'Uwaga: phpMyAdmin pobiera uprawnienia użytkowników wprost z tabeli uprawnień MySQL-a. Zawartość tej tabeli może różnić się od uprawnień jakich używa serwer, jeśli zostały dokonane w niej ręczne zmiany. W takim przypadku powinieneś %sprzeładować uprawnienia%s przed dalszą pracą.';
$strFlushTable = 'Przeładowanie tabeli ("FLUSH")';
$strFormEmpty = 'Brakująca wartość w formularzu!';
$strFormat = 'Format';
$strFullText = 'Pełny tekst';
$strFunction = 'Funkcja';

$strGenBy = 'Wygenerowany przez';
$strGenTime = 'Czas wygenerowania';
$strGeneralRelationFeat = 'Ogólne funkcje relacyjne';
$strGerman = 'Niemiecki';
$strGlobal = 'globalnie';
$strGlobalPrivileges = 'Globalne uprawnienia';
$strGlobalValue = 'Wartość globalna';
$strGo = 'Wykonanie';
$strGrantOption = 'Nadanie';
$strGrants = 'Nadanie';
$strGreek = 'Grecki';
$strGzip = '".gz"';

$strHasBeenAltered = 'zostało zamienione.';
$strHasBeenCreated = 'zostało utworzone.';
$strHaveToShow = 'Musisz wybrać przynajmniej jedną kolumnę do wyświetlenia';
$strHebrew = 'Hebrajski';
$strHome = 'Wejście';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmina';
$strHomepageSourceforge = 'Pobranie wersji Sourceforge phpMyAdmina';
$strHost = 'Host';
$strHostEmpty = 'Brak nazwy hosta!';
$strHungarian = 'Węgierski';

$strId = 'ID';
$strIdxFulltext = 'Pełny tekst';
$strIfYouWish = 'Proszę podać listę kolumn rozdzieloną przecinkami aby załadować tylko wybrane kolumny.';
$strIgnore = 'Ignoruj';
$strIgnoringFile = 'Plik %s jest ignorowany';
$strImportDocSQL = 'Import plików docSQL';
$strImportFiles = 'Import plików';
$strImportFinished = 'Import zakończony';
$strInUse = 'w użyciu';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Klucz %s został usunięty';
$strIndexName = 'Nazwa indeksu :';
$strIndexType = 'Rodzaj indeksu :';
$strIndexes = 'Indeksy';
$strInnodbStat = 'Status InnoDB';
$strInsecureMySQL = 'Twój plik konfiguracyjny zawiera ustawienia (konto roota bez hasła), które odpowiadają domyślnemu uprzywilejowanemu kontu MySQL. Twój serwer MySQL działa z takim domyślnym ustawieniem, jest otwarty dla włamywaczy i naprawdę ta luka w bezpieczeństwie powinna zostać naprawiona.';
$strInsert = 'Dodanie';
$strInsertAsNewRow = 'Dodanie jako nowego rekordu';
$strInsertNewRow = 'Dodanie nowego rekordu';
$strInsertTextfiles = 'Dodanie pliku tekstowego do tabeli';
$strInsertedRowId = 'Id wstawionego wiersza:';
$strInsertedRows = 'Wprowadzone rekordy:';
$strInstructions = 'Instrukcje';
$strInternalNotNecessary = '* Wewnętrzna relacja nie jest konieczna gdy istnieje również w InnoDB.';
$strInternalRelations = 'Wewnętrzne relacje';
$strInvalidName = '"%s" jest słowem zarezerwowanym, nie można użyć go jako nazwy bazy danych/tabeli/pola.';

$strJapanese = 'Japoński';
$strJumpToDB = 'Skok do bazy danych &quot;%s&quot;.';
$strJustDelete = 'Po prostu usunięcie użytkowników z tabeli uprawnień.';
$strJustDeleteDescr = 'Nim uprawnienia zostaną przeładowane, &quot;usunięci&quot; użytkownicy nadal będą mieli dotychczasowy dostęp do serwera.';

$strKeepPass = 'Nie zmieniaj hasła';
$strKeyname = 'Nazwa klucza';
$strKill = 'Zabicie';
$strKorean = 'Koreański';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'opcje LaTeX\'a';
$strLandscape = 'Orientacja pozioma';
$strLatexCaption = 'Nagłówek tabeli';
$strLatexContent = 'Zawartość tabeli __TABLE__';
$strLatexContinued = '(kontynuacja)';
$strLatexContinuedCaption = 'Kontynuacja nagłówka tabeli';
$strLatexIncludeCaption = 'Załącz nagłówek tabeli';
$strLatexLabel = 'Etykieta klucza';
$strLatexStructure = 'Struktura tabeli __TABLE__';
$strLength = 'Długość';
$strLengthSet = 'Długość/Wartości*';
$strLimitNumRows = 'rekordów na stronie';
$strLineFeed = 'Kod wysunięcia linii: \\n';
$strLines = 'Linie';
$strLinesTerminatedBy = 'Linie zakończone przez';
$strLinkNotFound = 'Łącze nie znalezione';
$strLinksTo = 'Łącze';
$strLithuanian = 'Litewski';
$strLoadExplanation = 'Domyślnie zaznaczona jest najlepsza metoda, ale można ją zmienić jeśli nie działa.';
$strLoadMethod = 'Metoda LOAD';
$strLocalhost = 'Host lokalny';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLogPassword = 'Hasło:';
$strLogServer = 'Serwer';
$strLogUsername = 'Użytkownik:';
$strLogin = 'Login';
$strLoginInformation = 'Dane użytkownika';
$strLogout = 'Wylogowanie';

$strMIME_MIMEtype = 'Typ MIME';
$strMIME_available_mime = 'Dostępne typy MIME';
$strMIME_available_transform = 'Dostępne transformacje';
$strMIME_description = 'Opis';
$strMIME_file = 'Nazwa pliku';
$strMIME_nodescription = 'Transformacja ta nie ma opisu.<br />Proszę zapytać autora, co robi %s.';
$strMIME_transformation = 'Sposób prezentacji danych';
$strMIME_transformation_note = 'Aby uzyskać listę dostępnych opcji transformacji i ich typów MIME, kliknij na %sopisy transformacji%s';
$strMIME_transformation_options = 'Opcje transformacji';
$strMIME_transformation_options_note = 'Proszę wprowadzić wartości dla tranformacji w następującym formacie: \'a\',\'b\',\'c\'...<br />Jeżeli potrzeba wprowadzić odwrotny ukośnik ("\") lub apostrof ("\'"), należy je poprzedzić odwrotnym ukośnikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strMIME_without = 'Typy MIME pisane czcionką pochyloną nie mają odzielnej funkcji transformacji';
$strMissingBracket = 'Brakujący nawias';
$strModifications = 'Modyfikacje zostały zapamiętane';
$strModify = 'Modyfikacja';
$strModifyIndexTopic = 'Modyfikacja indeksu';
$strMoreStatusVars = 'Więcej zmiennych statusu';
$strMoveTable = 'Przeniesienie tabeli do (bazadanych<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s została przeniesiona do %s.';
$strMoveTableSameNames = 'Nie można przenieść tabeli do niej samej!';
$strMultilingual = 'wiele języków';
$strMustSelectFile = 'Należy wybrać plik, który chcesz wstawić.';
$strMySQLCharset = 'System kodowania znaków dla MySQL';
$strMySQLReloaded = 'MySQL przeładowany.';
$strMySQLSaid = 'MySQL zwrócił komunikat: ';
$strMySQLServerProcess = 'MySQL %pma_s1% uruchomiony na %pma_s2% jako %pma_s3%';
$strMySQLShowProcess = 'Pokazuj procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNext = 'Następne';
$strNo = 'Nie';
$strNoDatabases = 'Brak baz danych';
$strNoDatabasesSelected = 'Żadna baza danych nie został wybrana.';
$strNoDescription = 'brak opisu';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoExplain = 'Pomiń wyjaśnienie SQL';
$strNoFrames = 'phpMyAdmin jest bardziej przyjazny w przeglądarkach <b>obsługujących ramki</b>';
$strNoIndex = 'Brak zdefiniowanego indeksu!';
$strNoIndexPartsDefined = 'Brak zdefiniowanych części indeksu!';
$strNoModification = 'Bez zmian';
$strNoOptions = 'Ten format nie ma żadnych opcji';
$strNoPassword = 'Brak hasła';
$strNoPermission = 'Serwer WWW nie ma praw do zapisu pliku %s.';
$strNoPhp = 'bez kodu PHP';
$strNoPrivileges = 'Brak uprawnień';
$strNoQuery = 'Brak zapytania SQL!';
$strNoRights = 'Brak wystarczających uprawnień!';
$strNoSpace = 'Brak miejsca na zapis pliku %s.';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNoUsersFound = 'Nie znaleziono użytkownika(ów).';
$strNoUsersSelected = 'Żaden użytkownik nie został wybrany.';
$strNoValidateSQL = 'Pomiń sprawdzanie poprawności SQL';
$strNone = 'Brak';
$strNotNumber = 'To nie jest liczba!';
$strNotOK = 'błąd';
$strNotSet = 'Tabela <b>%s</b> nie została znaleziona lub nie jest ustawiona w %s';
$strNotValidNumber = ' nie jest poprawnym numerem rekordu!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s trafień wewnątrz tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>W sumie:</b> <i>%s</i> trafień';
$strNumTables = 'Tabele';

$strOK = 'OK';
$strOftenQuotation = 'Znaki cudzysłowu. OPCJONALNIE oznacza, że tylko pola char oraz varchar są zawarte w "cudzysłowach".';
$strOperations = 'Operacje';
$strOptimizeTable = 'Optymalizacja tabeli';
$strOptionalControls = 'Opcjonalnie. Określenie w jaki sposób zapisać lub odczytać znaki specjalne.';
$strOptionally = 'OPCJONALNIE';
$strOptions = 'Opcje';
$strOr = 'Lub';
$strOverhead = 'Nadmiar';
$strOverwriteExisting = 'Nadpisywanie istniejących plików';

$strPHP40203 = 'Używasz PHP w wersji 4.2.3, która ma poważny błąd w obsłudze napisów wielobajtowych (mbstring). Zobacz raport na temat błędów PHP nr 19404. Nie zaleca się używania tej wersji PHP z phpMyAdminem.';
$strPHPVersion = 'Wersja PHP';
$strPageNumber = 'Numer strony:';
$strPaperSize = 'Rozmiar papieru';
$strPartialText = 'Skrócony tekst';
$strPassword = 'Hasło';
$strPasswordChanged = 'Hasło dla %s zostało pomyślnie zmienione.';
$strPasswordEmpty = 'Puste hasło!';
$strPasswordNotSame = 'Hasła nie są identyczne!';
$strPdfDbSchema = 'Schemat bazy danych "%s" - strona %s';
$strPdfInvalidPageNum = 'Niezdefiniowany numer strony PDF!';
$strPdfInvalidTblName = 'Tabela "%s" nie istnieje!';
$strPdfNoTables = 'Brak tabel';
$strPerHour = 'na godzinę';
$strPerMinute = 'na minutę';
$strPerSecond = 'na sekundę';
$strPhoneBook = 'książka telefoniczna';
$strPhp = 'Utwórz kod PHP';
$strPmaDocumentation = 'Dokumentacja phpMyAdmina';
$strPmaUriError = 'Dyrektywa <tt>$cfg[\'PmaAbsoluteUri\']</tt> musi być ustawiona w pliku konfiguracyjnym!';
$strPortrait = 'Orientacja pionowa';
$strPos1 = 'Początek';
$strPrevious = 'Poprzednie';
$strPrimary = 'Podstawowy';
$strPrimaryKey = 'Podstawowy klucz';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy został usunięty';
$strPrimaryKeyName = 'Nazwą podstawowego klucza musi być... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musi</b> być nazwą <b>jedynie</b> klucza podstawowego!)';
$strPrint = 'Drukowanie';
$strPrintView = 'Widok do wydruku';
$strPrintViewFull = 'Widok do wydruku (z pełnymi tekstami)';
$strPrivDescAllPrivileges = 'Zawiera wszystkie uprawnienia, oprócz GRANT.';
$strPrivDescAlter = 'Pozwala zmieniać strukturę istniejących tabel.';
$strPrivDescCreateDb = 'Pozwala tworzyć nowe bazy danych i tabele.';
$strPrivDescCreateTbl = 'Pozwala tworzyć nowe tabele.';
$strPrivDescCreateTmpTable = 'Pozwala tworzyć tabele tymczasowe.';
$strPrivDescDelete = 'Pozwala usuwać dane.';
$strPrivDescDropDb = 'Pozwala usuwać bazy danych i tabele.';
$strPrivDescDropTbl = 'Pozwala usuwać tabele.';
$strPrivDescExecute = 'Pozwala uruchamiać zapamiętane procedury; Nie ma żadnych skutków w tej wersji MySQL.';
$strPrivDescFile = 'Pozwala importować i eksportować dane z/do plików.';
$strPrivDescGrant = 'Pozwala dodawać użytkowników i nadawać uprawnienia bez przeładowywania tabeli uprawnień.';
$strPrivDescIndex = 'Pozwala tworzyć i usuwać indeksy.';
$strPrivDescInsert = 'Pozwala wstawiać i zamieniać dane.';
$strPrivDescLockTables = 'Pozwala blokować tabele dla aktualnego wątku.';
$strPrivDescMaxConnections = 'Ogranicza liczbę nowych połączeń, które może otworzyć użytkownik w ciągu godziny.';
$strPrivDescMaxQuestions = 'Ogranicza liczbę zapytań, które może wysłać użytkownik w ciągu godziny.';
$strPrivDescMaxUpdates = 'Ogranicza liczbę poleceń zmieniających jakąkolwiek tabelę lub bazę danych, które może wykonać użytkownik w ciągu godziny.';
$strPrivDescProcess3 = 'Pozwala unicestwiać procesy innych użytkowników.';
$strPrivDescProcess4 = 'Pozwala zobaczyć pełną listę zapytań na liście procesów.';
$strPrivDescReferences = 'Nie ma żadnych skutków w tej wersji MySQL.';
$strPrivDescReload = 'Pozwala przeładowywać ustawienia serwera i opróżniać pamięć podręczną serwera.';
$strPrivDescReplClient = 'Nadaje użytkownikowi prawo, by zapytać gdzie są serwery podrzędne / nadrzędne.';
$strPrivDescReplSlave = 'Potrzebne dla replikacji serwera podrzędnego.';
$strPrivDescSelect = 'Pozwala czytać dane.';
$strPrivDescShowDb = 'Daje dostęp do pełnej listy baz danych.';
$strPrivDescShutdown = 'Pozwala zamknąć serwer.';
$strPrivDescSuper = 'Pozwala na połączenie, nawet jeśli osiągnięta została maksymalna ilość połączeń; Wymagana dla większość operacji administracyjnych, takich jak ustawianie zmiennych globalnych czy unicestwianie wątków innych użytkowników.';
$strPrivDescUpdate = 'Pozwala zmieniać dane.';
$strPrivDescUsage = 'Brak uprawnień.';
$strPrivileges = 'Uprawnienia';
$strPrivilegesReloaded = 'Uprawnienia zostały pomyślnie przeładowane.';
$strProcesslist = 'Lista procesów';
$strProperties = 'Właściwości';
$strPutColNames = 'Umieść nazwy pól w pierwszym rekordzie';

$strQBE = 'Zapytanie przez przykład';
$strQBEDel = 'Usuń';
$strQBEIns = 'Wstaw';
$strQueryFrame = 'Okienko zapytania';
$strQueryFrameDebug = 'Informacje diagnostyczne';
$strQueryFrameDebugBox = 'Aktywne zmienne dla formularza zapytania:\nBaza danych: %s\nTabela: %s\nSerwer: %s\n\nAktualne zmienna dla formularza zapytania:\nBaza danych: %s\nTabela: %s\nSerwer: %s\n\nDokument otwierający: %s\nDokument ze zbiorem ramek: %s.';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych <b>%s</b>:';
$strQuerySQLHistory = 'Historia SQL';
$strQueryStatistics = '<b>Statystyki zapytań</b>: Od rozpoczęcia jego pracy, do serwera zostało wysłanych %s zapytań.';
$strQueryTime = 'Wykonanie zapytania trwało %01.4f sekund(y)';
$strQueryType = 'Rodzaj zapytania';
$strQueryWindowLock = 'Nie nadpisuj tego zapytania spoza okna';

$strReType = 'Ponownie';
$strReceived = 'Otrzymane';
$strRecords = 'Rekordy';
$strReferentialIntegrity = 'Sprawdzenie spójności powiązań:';
$strRelationNotWorking = 'Dodatkowe możliwości pracy z połączonymi tabelami zostały wyłączone. Aby dowiedzieć się, dlaczego - kliknij %stutaj%s.';
$strRelationView = 'Widok relacyjny';
$strRelationalSchema = 'Schemat relacyjny';
$strRelations = 'Relacje';
$strReloadFailed = 'Nie powiodło się przeładowanie MySQL.';
$strReloadMySQL = 'Przeładowanie MySQL';
$strReloadingThePrivileges = 'Przeładowanie uprawnień';
$strRememberReload = 'Proszę pamiętać o przeładowaniu serwera.';
$strRemoveSelectedUsers = 'Usunięcie zaznaczonych użytkowników';
$strRenameTable = 'Zmiana nazwy tabeli na';
$strRenameTableOK = 'Tabela %s ma zmienioną nazwę na %s';
$strRepairTable = 'Naprawienie tabeli';
$strReplace = 'Zamiana';
$strReplaceNULLBy = 'Zamienienie NULL przez';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReset = 'Reset';
$strResourceLimits = 'Ograniczenia zasobów';
$strRevoke = 'Cofnięcie';
$strRevokeAndDelete = 'Cofnięcie wszystkich aktywnych uprawnień użytkownikom, a następnie ich usunięcie.';
$strRevokeAndDeleteDescr = 'Nim uprawnienia zostaną przeładowane, użytkownicy nadal będą mieli uprawnienie USAGE.';
$strRevokeGrant = 'Cofnięcie uprawnień';
$strRevokeGrantMessage = 'Cofnięte zostały uprawnienia dla %s';
$strRevokeMessage = 'Cofnięte zostały uprawnienia dla %s';
$strRevokePriv = 'Cofnięcie uprawnień';
$strRowLength = 'Długość rekordu';
$strRowSize = ' Rozmiar rekordu ';
$strRows = 'Rekordów';
$strRowsFrom = 'rekordów począwszy od';
$strRowsModeFlippedHorizontal = 'poziomo (obrócone nagłówki)';
$strRowsModeHorizontal = 'poziomo';
$strRowsModeOptions = 'w trybie %s powtórz nagłówki po %s komórkach';
$strRowsModeVertical = 'pionowo';
$strRowsStatistic = 'Statystyka rekordów';
$strRunQuery = 'Wykonanie zapytania';
$strRunSQLQuery = 'Wykonanie zapytania/zapytań SQL do bazy danych %s';
$strRunning = 'uruchomiony na %s';
$strRussian = 'Rosyjski';

$strSQL = 'SQL';
$strSQLOptions = 'Opcje SQL';
$strSQLParserBugMessage = 'Istnieje szansa, że właśnie znalazłeś błąd w analizatorze składni SQL. Zbadaj bliżej swoje zapytanie i sprawdź, czy cudzysłowy są poprawne i dobrze sparowane. Inną możliwą przyczyną niepowodzenia może być to, że wysyłasz plik ze znakami binarnymi poza obszarem tekstu ujętego w cudzysłowy. Możesz również sprawdzić swoje zapytanie SQL poprzez linię poleceń MySQL. W znalezieniu przyczyny problemu może pomóc także - jeśli się pojawi - poniższy opis błędu serwera MySQL. Jeśli nadam masz problemy lub analizator składni zgłasza usterkę a linia poleceń - nie, ogranicz sekwencję zapytań SQL do pojedynczego, które powoduje problemy i zgłosić błąd, dołączając fragment danych zawarty w poniższej sekcji TNIJ:';
$strSQLParserUserError = 'Wygląda na to, że w twoim zapytaniu SQL jest błąd. W znalezieniu przyczyny problemu może pomóc także - jeśli się pojawi - poniższy opis błędu serwera MySQL.';
$strSQLQuery = 'zapytanie SQL';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Nieprawidłowy identyfikator';
$strSQPBugUnclosedQuote = 'Niezamknięty cudzysłów';
$strSQPBugUnknownPunctuation = 'Nieznany znak przestankowy';
$strSave = 'Zachowanie';
$strSaveOnServer = 'Zapisz na serwerze w katalogu %s';
$strScaleFactorSmall = 'Współczynnik skali jest za mały, by schemat zmieścił się na jednej stronie';
$strSearch = 'Szukaj';
$strSearchFormTitle = 'Szukaj w bazie danych';
$strSearchInTables = 'Wewnątrz tabel(i):';
$strSearchNeedle = 'Szukane słowo (słowa) lub wartość (wartości)  (symbol wieloznaczny: "%"):';
$strSearchOption1 = 'przynajmniej jedno ze słów';
$strSearchOption2 = 'wszystkie słowa';
$strSearchOption3 = 'cała fraza';
$strSearchOption4 = 'jako wyrażenie regularne';
$strSearchResultsFor = 'Szukaj w rezultatach dla "<i>%s</i>" %s:';
$strSearchType = 'Znajdź:';
$strSecretRequired = 'Plik konfiguracyjny wymaga teraz tajnej frazy kodującej (blowfish_secret).';
$strSelect = 'Wybór';
$strSelectADb = 'Proszę wybrać bazę danych';
$strSelectAll = 'Zaznaczenie wszystkich';
$strSelectFields = 'Wybór pól (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSelectTables = 'Wybierz tabele';
$strSend = 'Zapisz jako plik';
$strSent = 'Wysłane';
$strServer = 'Serwer %s';
$strServerChoice = 'Wybór serwera';
$strServerStatus = 'Informacje o działaniu serwera';
$strServerStatusUptime = 'Ten serwer MySQL działa przez %s. Rozpoczęcie jego pracy: %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Zmienne';
$strServerTrafficNotes = '<b>Ruch na serwerze</b>: Poniższe tabele pokazują statystyki ruchu na tym serwerze MySQL od rozpoczęcia jego pracy.';
$strServerVars = 'Zmienne i ustawienia serwera';
$strServerVersion = 'Wersja serwera';
$strSessionValue = 'Wartość sesji';
$strSetEnumVal = 'Jeżeli pole jest typu "ENUM" lub "SET", wartości wprowadza się w formacie: \'a\',\'b\',\'c\'...<br />Jeżeli potrzeba wprowadzić odwrotny ukośnik ("\") lub apostrof ("\'"), należy je poprzedzić odwrotnym ukośnikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShow = 'Pokazanie';
$strShowAll = 'Pokazanie wszystkiego';
$strShowColor = 'Pokaż kolor';
$strShowCols = 'Pokazanie kolumn';
$strShowDatadictAs = 'Format słownika danych';
$strShowFullQueries = 'Pokazywanie pełnych zapytań';
$strShowGrid = 'Pokaż siatkę';
$strShowPHPInfo = 'Informacje o PHP';
$strShowTableDimension = 'Pokaż wymiary tabel';
$strShowTables = 'Pokazanie tabel';
$strShowThisQuery = ' Ponowne wywołanie tego zapytania ';
$strShowingRecords = 'Pokazanie rekordów ';
$strSimplifiedChinese = 'Chiński uproszczony';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSort = 'Sortuj';
$strSortByKey = 'Sortowanie wg klucza';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSplitWordsWithSpace = 'Słowa są rozdzielane znakiem spacji (" ").';
$strStatCheckTime = 'Ostatnie sprawdzenie';
$strStatCreateTime = 'Utworzenie';
$strStatUpdateTime = 'Ostatnia aktualizacja';
$strStatement = 'Cecha';
$strStatus = 'Status';
$strStrucCSV = 'dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucDrop = 'Dodanie \'drop table\'';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucOnly = 'Tylko struktura';
$strStructPropose = 'Propozycja struktury tabeli';
$strStructure = 'Struktura';
$strSubmit = 'Wysłanie';
$strSuccess = 'Zapytanie SQL zostało pomyślnie wykonane';
$strSum = 'Suma';
$strSwedish = 'Szwedzki';
$strSwitchToTable = 'Przełączenie na skopiowaną tabelę';

$strTable = 'Tabela';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s została usunięta';
$strTableHasBeenEmptied = 'Tabela %s została opróżniona';
$strTableHasBeenFlushed = 'Tabela %s została przeładowana';
$strTableMaintenance = 'Zarządzanie tabelą';
$strTableOfContents = 'Spis treści';
$strTableOptions = 'Opcje tabeli';
$strTableStructure = 'Struktura tabeli dla ';
$strTableType = 'Typ tabeli';
$strTables = '%s tabel(a)';
$strTblPrivileges = 'Uprawnienia specyficzne dla tabel';
$strTextAreaLength = ' To pole może nie być edytowalne,<br /> z powodu swojej długości ';
$strThai = 'Tajski';
$strTheContent = 'Zawartość pliku została dołączona.';
$strTheContents = 'Zawartość pliku zastąpiła dane wybranej tabeli, których podstawowy lub unikalny klucz był identyczny.';
$strTheTerminator = 'Znak rozdzielający pola.';
$strThisHost = 'Ten host';
$strThisNotDirectory = 'To nie był katalog';
$strThreadSuccessfullyKilled = 'Wątek %s został pomyślnie unicestwiony.';
$strTime = 'Czas';
$strToggleScratchboard = 'włącz / wyłącz scratchboard';
$strTotal = 'wszystkich';
$strTotalUC = 'Sumarycznie';
$strTraditionalChinese = 'Chiński tradycyjny';
$strTraffic = 'Ruch';
$strTransformation_image_jpeg__inline = 'Wyświetla klikalną miniaturkę; opcje: szerokość,wysokość w pikselach (oryginalne proporcje zostaną zachowane)';
$strTransformation_image_jpeg__link = 'Wyświetla link do tego obrazu (bezpośrednie ściągnięcie bloba).';
$strTransformation_image_png__inline = 'Zobacz image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Bierze pole TIME, TIMESTAMP lub DATETIME i formatuje je używając lokalnego formatu daty. Pierwsza opcja to liczba godzin, jaka zostanie dodana do daty (domyślnie: 0). Druga opcja to inny format daty, zgodny z parametrami dostępnymi dla funkcji PHP strftime().';
$strTransformation_text_plain__external = 'TYLKO LINUX: Uruchamia zewnętrzną aplikację i przekazuje dane pól na standardowe wejście. Zwraca standardowe wyjście tej aplikacji. Domyślnie jest to Tidy, to pretty print HTML code. Ze względu na bezpieczeństwo, musisz ręcznie zmodyfkować plik libraries/transformations/text_plain__external.inc.php i wstawić narzędzie, na którego uruchamianie pozwalasz. Pierwszą opcją jest liczba programów, których chcesz użyć, a drugą są parametry programu. Jeżeli trzeci parametr jest ustawiony na 1, zostanie dokonana konwersja wyjścia poprzez użycie htmlspecialchars() (Domyślną wartością jest 1). Jeżeli czwarty parametr został ustawiony na 1, zawartość komórki nie będzie zawijana, tak że całe wyjście zostanie pokazane bez zmian formatu (domyślną wartością jest 1)';
$strTransformation_text_plain__formatted = 'Zachowuje orygialne formatowanie pola. Neutralizowanie znaków niespecjalnych nie jest dokonywane.';
$strTransformation_text_plain__imagelink = 'Wyświetla obrazek i link, pole zawiera nazwę pliku; pierwszą opcję jest prefiks, taki jak "http://domain.com/", drugą opcją jest szerokość w pikselach, trzecią opcją jest wysokość.';
$strTransformation_text_plain__link = 'Wyświetla link, pole zawiera nazwę pliku; pierwsza opcja to prefiks, taki jak "http://domain.com/", druga opcja to tytuł linku.';
$strTransformation_text_plain__substr = 'Pokazuje jedynie część napisu. Pierwsza opcja to offset, od którego ma zacząć się wyświetlanie tekstu (domyślnie 0). Druga opcja to ilość zwracanego tekstu. Jeżeli jest pusta, zwracany jest cały pozostały tekst. Trzecia opcja określa jakie znaki zostaną dodane do wyjścia, jeżeli zwracany jest część napisu (domyślnie: ...) .';
$strTransformation_text_plain__unformatted = 'Wyświetla kod HTML przy pomocy encji HTML. Formatowanie HTML nie jest pokazywane.';
$strTruncateQueries = 'Obcinanie wyświetlane zapytań';
$strTurkish = 'Turecki';
$strType = 'Typ';

$strUkrainian = 'Ukraiński';
$strUncheckAll = 'Odznaczenie wszystkich';
$strUnicode = 'Unikod';
$strUnique = 'Unikalny';
$strUnknown = 'nieznany';
$strUnselectAll = 'Odznaczenie wszystkich';
$strUpdComTab = 'Informacje o tym, jak zaktualizować tabelę Column_comments znajdują się w dokumentacji';
$strUpdatePrivMessage = 'Uaktualniłeś uprawnienia dla %s.';
$strUpdateProfile = 'Uaktualnienie profilu:';
$strUpdateProfileMessage = 'Profil został uaktualniony.';
$strUpdateQuery = 'Zmiana zapytania';
$strUpgrade = 'Poleca się aktualizację do %s w wersji %s lub późniejszej.';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'Użycie cudzysłowów z nazwami tabel i pól';
$strUseHostTable = 'Użycie tabeli hostów';
$strUseTables = 'Użycie tabel';
$strUseTextField = 'Użycie pola tekstowego';
$strUseThisValue = 'Użycie tej wartości';
$strUser = 'Użytkownik';
$strUserAlreadyExists = 'Użytkownik %s już istnieje!';
$strUserEmpty = 'Brak nazwy użytkownika!';
$strUserName = 'Nazwa użytkownika';
$strUserNotFound = 'Wybrany użytkownik nie został znaleziony w tabeli uprawnień.';
$strUserOverview = 'Opis użytkownika';
$strUsers = 'Użytkownicy';
$strUsersDeleted = 'Wybrani użytkownicy zostali pomyślnie usunięci.';
$strUsersHavingAccessToDb = 'Użytkownicy mający dostęp do &quot;%s&quot;';

$strValidateSQL = 'Sprawdzanie proprawności SQL';
$strValidatorError = 'Analizator składni SQL nie mógł zostać zainicjalizowany. Sprawdź, czy zainstalowane są niezbędne rozszerzenia php, tak jak zostało to opisane w %sdokumentacji%s.';
$strValue = 'Wartość';
$strVar = 'Zmienna';
$strViewDump = 'Zrzut tabeli';
$strViewDumpDB = 'Zrzut bazy danych';
$strViewDumpDatabases = 'Zobacz zrzut (schemat) baz danych';

$strWebServerUploadDirectory = 'katalog serwera www dla uploadu';
$strWebServerUploadDirectoryError = 'Katalog ustalony dla uploadu jest nieosiągalny';
$strWelcome = 'Witamy w %s';
$strWestEuropean = 'Zachodnioeuropejski';
$strWildcard = 'znak wieloznaczny';
$strWindowNotFound = 'Docelowe okno przeglądarki nie mogło być zaktualizowane. Być może okno-rodzic zostało zamknięte lub przeglądarka, uwzględniając ustawienia bezpieczeństwa, blokuje aktualizacje pomiędzy oknami';
$strWithChecked = 'Zaznaczone:';
$strWritingCommentNotPossible = 'Zapisanie komentarza nie jest możliwe';
$strWritingRelationNotPossible = 'Zapisanie relacji nie jest możliwe';
$strWrongUser = 'Błędne pola użytkownik/hasło. Brak dostępu.';

$strXML = 'XML';

$strYes = 'Tak';

$strZeroRemovesTheLimit = 'Uwaga: Ustawienie tych opcji na 0 (zero) usuwa ograniczenie.';
$strZip = '".zip"';
// To translate

$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Chech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
?>
