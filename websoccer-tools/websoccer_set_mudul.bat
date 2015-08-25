echo off
echo             				     Open Websoccer-Sim Tool
echo                                                            -
echo                                            Neue Classes & Template - Struktur
echo                                            ==================================
echo                                                by Rolf Joseph / ErdemCan
echo   
echo
echo   Alle Dateien in den Verzeichnissen classes und template/defaults werden den entsprechenden Modulordnern zugewiesen.
echo   Vorausetzung ist, das die global.inc.php und die TemplateEngine.class.php entsprechend geändert wurde, damit es läuft.
echo   Dies bringt mehr Übersicht, einfacher Dateien zu Testen, bei Kompatibilität zum alten Struktur-System.
echo
echo   Zuerst wird vom Websoccer-Verzeichnis ein Bakup-Verzeichnis erstellt. Anschließend werden die Operationen durchgeführt. 
echo
echo.

xcopy /y /s /e /v websoccer\*.* websoccer_backup\


move websoccer\classes\actions\*.* websoccer\classes\
move websoccer\classes\converters\*.* websoccer\classes\
move websoccer\classes\events\*.* websoccer\classes\
move websoccer\classes\jobs\*.* websoccer\classes\
move websoccer\classes\loginmethods\*.* websoccer\classes\
move websoccer\classes\models\*.* websoccer\classes\
move websoccer\classes\phpass\*.* websoccer\classes\
move websoccer\classes\plugins\*.* websoccer\classes\
move websoccer\classes\services\*.* websoccer\classes\
move websoccer\classes\skins\*.* websoccer\classes\
move websoccer\classes\validators\*.* websoccer\classes\

rd /s /q websoccer\classes\jobs
rd /s /q websoccer\classes\phpass

xcopy /y /s /e /v websoccer\classes\facebooksdk\*.* websoccer\modules\facebook\facebooksdk\
xcopy /y /s /e /v websoccer\classes\googleapi\*.* websoccer\modules\googleplus\googleapi\

rd /s /q websoccer\classes\facebooksdk
rd /s /q websoccer\classes\googleapi

set CLASS_PATH="websoccer\classes"

set MODULE_PATH="websoccer\modules\actionlogs"
set FILE_LIST=( UserInactivityCheckJob.class.php ActionHandler.class.php ActionLogDataService.class.php AllActivitiesModel.class.php UserActivitiesModel.class.php AllUserActivitiesModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\alltimetable"
set FILE_LIST=( AlltimeTableModel.class.php LeagueDetailsModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\cancellation"
set FILE_LIST=( DisableAccountController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\clubs"
set FILE_LIST=( TeamDetailsModel.class.php TeamHistoryModel.class.php TeamPlayersModel.class.php TeamResultsModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\clubslogo"
set FILE_LIST=( UploadClubPictureController.class.php  )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\clubsrename"
set FILE_LIST=( RenameClubController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\core"
set FILE_LIST=( DefaultBootstrapSkin.class.php GreenBootstrapSkin.class.php SchedioartFootballSkin.class.php AbsencesDataService.class.php AbstractEvent.class.php AbstractJob.class.php AccessDeniedException.class.php AdminPasswordConverter.class.php BreadcrumbBuilder.class.php ConfigCacheFileWriter.class.php ConfigFileWriter.class.php ConverterFactory.class.php CookieHelper.class.php DbConnection.class.php DbSessionManager.class.php EmailHelper.class.php FileUploadHelper.class.php FileWriter.class.php FormBuilder.class.php FrontMessage.class.php I18n.class.php IActionController.class.php IConverter.class.php IModel.class.php IValidator.class.php ModuleConfigHelper.class.php NavigationBuilder.class.php NavigationItem.class.php PageIdRouter.class.php Paginator.class.php PasswordHash.php PluginMediator.class.php SecurityUtil.class.php StringUtil.class.php TemplateEngine.class.php UrlUtil.class.php ValidationException.class.php ViewHandler.class.php WebSoccer.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\cups"
set FILE_LIST=( CupGroupDetailsModel.class.php CupRoundsLinkConverter.class.php CupsDataService.class.php ScheduleGenerator.class.php UniqueCupNameValidator.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\facebook"
set FILE_LIST=( FacebookLoginController.class.php FacebookLoginModel.class.php FacebookLogoutController.class.php FacebookSdk.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\fireplayer"
set FILE_LIST=( FirePlayerController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\formation"
set FILE_LIST= ( FormationDataService.class.php FormationModel.class.php FormationTemplatesModel.class.php NextMatchModel.class.php RemoveFormationTemplateController.class.php SaveFormationController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\formauthentication"
set FILE_LIST= ( DefaultUserLoginMethod.class.php EmailValidator.class.php ForgotPasswordModel.class.php FormLoginController.class.php SendPasswordController.class.php UserActivationController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\freeclubs"
set FILE_LIST= ( ChooseAdditionalTeamController.class.php ChooseTeamController.class.php FreeClubsModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\frontend"
set FILE_LIST= ( ImprintModel.class.php ISkin.class.php TodaysMatchesModel.class.php  )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\frontendads"
set FILE_LIST= ( AdsModel.class.php manage-add.inc.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\generator"
set FILE_LIST= ( playersgenerator.php teamsgenerator.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\googleplus"
set FILE_LIST= ( GoogleplusLoginController.class.php GoogleplusLoginModel.class.php GoogleplusSdk.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\halloffame"
set FILE_LIST= ( HallOfFameModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\joomlalogin"
set FILE_LIST= ( JoomlaUserLoginMethod.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\languageswitcher"
set FILE_LIST= ( LanguageSwitcherController.class.php LanguageSwitcherModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\leagues"
set FILE_LIST= ( LeagueDataService.class.php LeagueSelectionModel.class.php LeaguesListModel.class.php LeaguesOverviewModel.class.php LeagueTableModel.class.php SeasonOfTeamCompletedEvent.class.php UpdateStatisticsJob.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\lending"
set FILE_LIST= ( BorrowPlayerController.class.php LendPlayerController.class.php LentPlayersModel.class.php PlayerDetailsModel.class.php UnmarkLendableController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\livematches"
set FILE_LIST= ( AllLiveMatchesBlockModel.class.php LiveMatchesDataService.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\matches"
set FILE_LIST= ( CupResultsModel.class.php CupsListModel.class.php LastMatchModel.class.php LatestResultsBlockModel.class.php LiveMatchBlockModel.class.php MatchChangesModel.class.php MatchDetailsModel.class.php MatchesDataService.class.php MatchPlayersModel.class.php MatchPreviewModel.class.php MatchReportLinkConverter.class.php MatchStatisticsModel.class.php MyScheduleModel.class.php SaveMatchChangesController.class.php TodaysMatchesModel.class.php YouthMatchDataUpdateSimulatorObserver.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\messages"
set FILE_LIST= ( DeleteMessageController.class.php MessageDetailsModel.class.php MessagesDataService.class.php MessagesInboxModel.class.php MessagesOutboxModel.class.php SendMessageController.class.php UserNickSearchModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\moneytransactions"
set FILE_LIST= ( MoneyTransactionConverter.class.php PaymentSenderMessageConverter.class.php PaymentSubjectMessageConverter.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\nationalteams"
set FILE_LIST= ( AddNationalPlayerController.class.php FindNationalPlayersModel.class.php NationalMatchResultsModel.class.php NationalNextMatchesModel.class.php NationalNextMatchModel.class.php NationalPlayersModel.class.php NationalTeamMatchesModel.class.php NationalteamsDataService.class.php RemoveNationalPlayerController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\news"
set FILE_LIST= ( NewsDetailsModel.class.php NewsListModel.class.php TopNewsListModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\notifications"
set FILE_LIST= ( NotificationsDataService.class.php NotificationsModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\office"
set FILE_LIST= ( BankAccountDataService.class.php ExtendContractController.class.php FinancesModel.class.php FinancesSummaryModel.class.php MarkAsUnsellableController.class.php MyTeamModel.class.php OfficeModel.class.php PlayerDetailsModel.class.php SaveTicketsController.class.php SelectCaptainController.class.php TeamsDataService.class.php TicketsModel.class.php UnmarkUnsellableController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\players"
set FILE_LIST= ( AddPlayerWithoutTeamToTransfermarketJob.class.php PlayerDetailsWithDependenciesModel.class.php PlayersDataService.class.php PlayerStatisticsModel.class.php TopScorersModel.class.php TopStrikersModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\playerssearch"
set FILE_LIST= ( ClubSearchModel.class.php PlayersSearchModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premium"
set FILE_LIST= ( ExchangePremiumController.class.php PremiumAccountModel.class.php PremiumActionDummyController.class.php PremiumDataService.class.php PremiumTransactionConverter.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premiummicropayment"
set FILE_LIST= ( MicropaymentRedirectController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premiumpaypal"
set FILE_LIST= ( PaypalLinkModel.class.php PaypalPaymentNotificationController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premiumsofortcom"
set FILE_LIST= ( SofortComPaymentNotificationController.class.php SofortComRedirectController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\profile"
set FILE_LIST= ( DeleteProfilePictureController.class.php EmailValidator.class.php PasswordValidator.class.php ProfileBlockModel.class.php ProfileModel.class.php SaveProfileController.class.php SaveUsernameController.class.php SelectTeamController.class.php UploadProfilePictureController.class.php UserClubsSelectionModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\randomevents"
set FILE_LIST= ( DataGeneratorService.class.php RandomEventsDataService.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\rss"
set FILE_LIST= ( RssResultsOfUserModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\season"
set FILE_LIST= ( LatestResultsModel.class.php MatchDayResultsModel.class.php schedulegenerator.php season-complete.php SeasonsOfLeagueModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\shoutbox"
set FILE_LIST= ( DeleteShoutBoxMessageController.class.php SendShoutBoxMessageController.class.php ShoutboxLeagueModel.class.php ShoutboxModel.class.php shoutbox_columns.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\simulation"
set FILE_LIST= ( SimulateMatchesJob.class.php DataUpdateSimulatorObserver.class.php DataUpdateSimulatorObserver.class_.php DefaultSimulationObserver.class.php DefaultSimulationStrategy.class.php ISimulationObserver.class.php ISimulationStrategy.class.php ISimulatorObserver.class.php MatchCompletedEvent.class.php MatchReportSimulationObserver.class.php MatchReportSimulatorObserver.class.php MatchSimulationExecutor.class.php MatchSimulationExecutor.class_.php SimulateMatchesJob.class.php  SimulationAudienceCalculator.class.php SimulationCupMatchHelper.class.php SimulationFormationHelper.class.php SimulationHelper.class.php SimulationMatch.class.php SimulationPlayer.class.php SimulationStateHelper.class.php SimulationSubstitution.class.php SimulationTeam.class.php Simulator.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\sponsor"
set FILE_LIST= ( CancelSponsorController.class.php ChooseSponsorController.class.php SponsorModel.class.php SponsorsDataService.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\stadium"
set FILE_LIST= ( AcceptStadiumConstructionWorkJob.class.php AcceptStadiumConstructionWorkController.class.php AcceptStadiumConstructionWorkJob.class.php ExtendStadiumController.class.php StadiumExtensionModel.class.php StadiumModel.class.php StadiumsDataService.class.php TicketsComputedEvent.class.php UpgradeStadiumController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\stadiumenvironment"
set FILE_LIST= ( OrderBuildingController.class.php StadiumEnvironmentModel.class.php StadiumEnvironmentPlugin.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\statistics"
set FILE_LIST= ( UpdateStatisticsJob.class.php ProjectStatisticsModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\tables"
set FILE_LIST= ( TableHistoryModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\teamofday"
set FILE_LIST= ( TeamOfTheDayModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\termsandconditions"
set FILE_LIST= ( termsandconditions.php TermsAndConditionsModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\training"
set FILE_LIST= ( ChooseTrainerController.class.php ExecuteTrainingController.class.php PlayerTrainedEvent.class.php TrainerDetailsModel.class.php TrainingDataService.class.php TrainingModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\trainingcamp"
set FILE_LIST= ( BookCampController.class.php CancelCampController.class.php TrainingcampsDataService.class.php TrainingCampsDetailsModel.class.php TrainingCampsModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\transfermarket"
set FILE_LIST= ( AddPlayerWithoutTeamToTransfermarketJob.class.php LastTransfersModel.class.php MyTransferBidsModel.class.php MyTransfersModel.class.php PlayerDetailsModel.class.php RemovePlayerFromTransfermarketController.class.php SellPlayerController.class.php TeamTransfersModel.class.php TransferBidController.class.php TransferBidModel.class.php TransfermarketDataService.class.php TransfermarketOverviewModel.class.php UserTransfersModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\transferoffers"
set FILE_LIST= ( DirectTransferAcceptController.class.php DirectTransferCancelController.class.php DirectTransferOfferController.class.php DirectTransferOfferModel.class.php DirectTransferRejectController.class.php DirectTransfersDataService.class.php TransferOfferApprovalLinkConverter.class.php TransferOffersModel.class.php TransferOffersSentModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\transfers"
set FILE_LIST= ( ExecuteTransfersJob.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\userabsence"
set FILE_LIST= ( AbsenceAlertModel.class.php AbsenceModel.class.php AbsencesDataService.class.php ReportAbsenceController.class.php ReturnFromAbsenceController.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\userauthentication"
set FILE_LIST= ( DemoUserLoginMethod.class.php IUserAuthentication.class.php IUserLoginMethod.class.php LogoutController.class.php SessionBasedUserAuthentication.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\userbadges"
set FILE_LIST= ( BadgesDataService.class.php BadgesModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\userregistration"
set FILE_LIST= ( EmailValidator.class.php PasswordValidator.class.php RegisterFormController.class.php RegisterFormModel.class.php UserRegisteredEvent.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\users"
set FILE_LIST= ( HighscoreModel.class.php InactivityConverter.class.php User.class.php UserDetailsModel.class.php UserHistoryModel.class.php UserInactivityCheckJob.class.php UserInactivityDataService.class.php UserPasswordConverter.class.php UserResultsModel.class.php UsersDataService.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\usersonline"
set FILE_LIST= ( WhoIsOnlineModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\webjobexecution"
set FILE_LIST= ( executeJob.php job_execute.php  )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\wordpresslogin"
set FILE_LIST= ( WordpressUserLoginMethod.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\youth"
set FILE_LIST= ( AcceptYouthMatchRequestController.class.php BuyYouthPlayerController.class.php CancelYouthMatchRequestController.class.php CreateYouthMatchRequestController.class.php FireYouthPlayerController.class.php MoveYouthPlayerToProfessionalController.class.php MyYouthTeamModel.class.php RemoveYouthPlayerFromMarketController.class.php SaveYouthFormationController.class.php ScoutYouthPlayerController.class.php SellYouthPlayerController.class.php YouthMarketplaceModel.class.php YouthMatchDataUpdateSimulatorObserver.class.php YouthMatchesDataService.class.php YouthMatchesModel.class.php YouthMatchFormationModel.class.php YouthMatchReportModel.class.php YouthMatchReportSimulationObserver.class.php YouthMatchRequestsCreateModel.class.php YouthMatchRequestsModel.class.php YouthMatchSimulationExecutor.class.php YouthPlayerDetailsModel.class.php YouthPlayerPlayedEvent.class.php YouthPlayerScoutedEvent.class.php YouthPlayersDataService.class.php YouthPlayersOfTeamModel.class.php YouthScoutingModel.class.php )
for %%i in %FILE_LIST% do move %CLASS_PATH%\%%i %MODULE_PATH%

md websoccer\modules\userbadges\macros
move websoccer\templates\default\macros\badges.twig websoccer\modules\userbadges\macros\

move websoccer\templates\default\blocks\*.* websoccer\templates\default\
move websoccer\templates\default\emails\*.* websoccer\templates\default\
move websoccer\templates\default\macros\*.* websoccer\templates\default\
move websoccer\templates\default\views\*.* websoccer\templates\default\

set TEMPLATE_PATH="websoccer\templates\default"
set BLOCKS="blocks"
set VIEWS="views"

set MODULE_PATH="websoccer\modules\actionlogs\blocks"
set FILE_LIST=( user-activities-box.twig user-activities-list.twig )
md websoccer\modules\actionlogs\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\alltimetable\blocks"
set FILE_LIST=( alltimetable-table.twig )
md websoccer\modules\alltimetable\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\alltimetable\views"
set FILE_LIST=( alltimetable.twig )
md websoccer\modules\alltimetable\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\cancellation\views"
set FILE_LIST=( cancellation.twig )
md websoccer\modules\cancellation\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\clubs\blocks"
set FILE_LIST=( team_history.twig teamplayers.twig user_clubs_selection.twig )
md websoccer\modules\clubs\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\clubs\views"
set FILE_LIST=( team-details.twig )
md websoccer\modules\clubs\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\clubslogo\blocks"
set FILE_LIST=( upload_clublogo_link.twig )
md websoccer\modules\clubslogo\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\clubslogo\views"
set FILE_LIST=( upload_clublogo.twig )
md websoccer\modules\clubslogo\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\clubsrename\blocks"
set FILE_LIST=( rename_club_link.twig )
md websoccer\modules\clubsrename\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\clubsrename\views"
set FILE_LIST=( rename_club.twig )
md websoccer\modules\clubsrename\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\core"
set FILE_LIST=( ajax.twig base.twig box.twig breadcrumb.twig error.twig layout.twig layoutwithoutsidebar.twig navigationbar.twig )
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\core\blocks"
set FILE_LIST=( results-list.twig results-list-smallblock.twig )
md websoccer\modules\core\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\core\macros"
set FILE_LIST=( formelements.twig navitem.twig paginator.twig )
md websoccer\modules\core\macros
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\cups\blocks"
set FILE_LIST=( cupgroup_table.twig cups-list.twig )
md websoccer\modules\cups\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\facebook\blocks"
set FILE_LIST=( facebookloginbox.twig facebook_comments.twig facebook_like.twig facebook_sdk.twig )
md websoccer\modules\facebook\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\formation\blocks"
set FILE_LIST= ( formation_templates.twig nextmatch.twig nextmatch_with_formationlink.twig )
md websoccer\modules\formation\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\formation\views"
set FILE_LIST= ( formation.twig formation_base.twig )
md websoccer\modules\formation\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\formauthentication\blocks"
set FILE_LIST= ( userlogin.twig )
md websoccer\modules\formauthentication\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\formauthentication\views"
set FILE_LIST= ( activate-user.twig forgot-password.twig login.twig )
md websoccer\modules\formauthentication\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\freeclubs\views"
set FILE_LIST= ( freeclubs.twig )
md websoccer\modules\freeclubs\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\frontend\views"
set FILE_LIST= ( home.twig imprint.twig offline.twig )
md websoccer\modules\frontend\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\frontendads\blocks"
set FILE_LIST= ( ads_bottom.twig ads_sidebar.twig ads_top.twig )
md websoccer\modules\frontendads\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\googleplus\blocks"
set FILE_LIST= ( googleplusloginbox.twig googleplus_like.twig )
md websoccer\modules\googleplus\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\halloffame\views"
set FILE_LIST= ( halloffame.twig )
md websoccer\modules\halloffame\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\help"
set FILE_LIST= ( help.twig )
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\help\blocks"
set FILE_LIST= ( help_formation.twig help_messages.twig help_myteam.twig help_sponsor.twig help_stadium.twig help_tickets.twig help_training.twig help_trainingcamp.twig help_transfer-bid.twig help_transfermarket.twig )
md websoccer\modules\help\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\languageswitcher\blocks"
set FILE_LIST= ( language-switcher.twig )
md websoccer\modules\languageswitcher\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\leagues\blocks"
set FILE_LIST= ( league_table.twig table_base.twig leagues-selection-list.twig )
md websoccer\modules\leagues\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\leagues\views"
set FILE_LIST= ( league-details.twig leagues-overview.twig results-overview.twig )
md websoccer\modules\leagues\views"
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\lending\blocks"
set FILE_LIST= ( lent_players.twig )
md websoccer\modules\lending\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\lending\views"
set FILE_LIST= ( borrow-player.twig lend-player.twig )
md websoccer\modules\lending\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\matches\blocks"
set FILE_LIST= ( match_substitutions.twig cup-results.twig lastmatch.twig livematch.twig match_preview.twig match_result_players.twig match_result_statistics.twig )
md websoccer\modules\matches\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\matches\views"
set FILE_LIST= ( match-details.twig match_live_changes.twig myschedule.twig todaysmatches.twig )
md websoccer\modules\matches\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\messages\blocks"
set FILE_LIST= ( autocomplete-resultlist.twig message-compose.twig message-details.twig messages-outbox.twig messagesblock.twig )
md websoccer\modules\messages\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\messages\macros"
set FILE_LIST= ( messagebox.twig )
md websoccer\modules\messages\macros
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\messages\views"
set FILE_LIST= ( messages.twig )
md websoccer\modules\messages\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\nationalteams\blocks"
set FILE_LIST= ( national_next_match.twig )
md websoccer\modules\nationalteams\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\nationalteams\views"
set FILE_LIST= ( nationalmatches.twig nationalteam.twig nominate_national_players.twig )
md websoccer\modules\nationalteams\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\news\blocks"
set FILE_LIST= ( topnews.twig )
md websoccer\modules\news\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\news\views"
set FILE_LIST= ( news-details.twig news-overview.twig )
md websoccer\modules\news\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\notifications\blocks"
set FILE_LIST= ( notifications.twig )
md websoccer\modules\notifications\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\office\blocks"
set FILE_LIST= ( extend-contract-form.twig finances_summary.twig )
md websoccer\modules\office\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\office\views"
set FILE_LIST= ( extend-contract.twig finances.twig myteam-overview.twig office-overview.twig tickets.twig )
md websoccer\modules\office\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\players\blocks"
set FILE_LIST= ( playerstatistics.twig )
md websoccer\modules\players\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\players\macros"
set FILE_LIST= ( playerlists.twig )
md websoccer\modules\players\macros
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\players\views"
set FILE_LIST= ( player-details.twig scorers.twig strikers.twig )
md websoccer\modules\players\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\playerssearch\blocks"
set FILE_LIST= ( playerssearch-results.twig )
md websoccer\modules\playerssearch\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\playerssearch\views"
set FILE_LIST= ( playerssearch.twig )
md websoccer\modules\playerssearch\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premium\blocks"
set FILE_LIST= ( premiumblock.twig )
md websoccer\modules\premium\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\premium\macros"
set FILE_LIST= ( premium.twig )
md websoccer\modules\premium\macros
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\premium\views"
set FILE_LIST= ( premiumaccount.twig premium_confirm_action.twig premium_exchange.twig premium_exchange_confirm.twig premium_feature_requested.twig )
md websoccer\modules\premium\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premiummicropayment\blocks"
set FILE_LIST= ( micropaymentlink.twig )
md websoccer\modules\premiummicropayment\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premiumpaypal\blocks"
set FILE_LIST= ( paypalpaymentlink.twig )
md websoccer\modules\premiumpaypal\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\premiumsofortcom\blocks"
set FILE_LIST= ( sofortcompaymentlink.twig )
md websoccer\modules\premiumsofortcom\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\profile\blocks"
set FILE_LIST= ( userprofile.twig )
md websoccer\modules\profile\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\profile\macros"
set FILE_LIST= ( profileelements.twig )
md websoccer\modules\profile\macros
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\profile\views"
set FILE_LIST= ( change_profile_picture.twig enter_username.twig profile.twig )
md websoccer\modules\profile\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\rss\blocks"
set FILE_LIST= ( rss_results_link.twig )
md websoccer\modules\rss\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\rss\views"
set FILE_LIST= ( rss.twig )
md websoccer\modules\rss\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\season\blocks"
set FILE_LIST= ( season-picker.twig )
md websoccer\modules\season\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\shoutbox\blocks"
set FILE_LIST= ( shoutbox.twig )
md websoccer\modules\shoutbox\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\socialrecommendations\blocks"
set FILE_LIST= ( socialrecommendations.twig )
md websoccer\modules\socialrecommendations\blocks"
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\sponsor\views"
set FILE_LIST= ( sponsor.twig )
md websoccer\modules\sponsor\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\stadium\views"
set FILE_LIST= ( stadium.twig stadium-extend-confirm.twig )
md websoccer\modules\stadium\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\stadiumenvironment\views"
set FILE_LIST= ( stadiumenvironment.twig )
md websoccer\modules\stadiumenvironment\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\statistics\blocks"
set FILE_LIST= ( projectstatistics.twig )
md websoccer\modules\statistics\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\statistics\macros"
set FILE_LIST= ( statisticelements.twig )
md websoccer\modules\statistics\macros
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\tables\views"
set FILE_LIST= ( tablehistory.twig )
md websoccer\modules\tables\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\teamofday\views"
set FILE_LIST= ( teamoftheday.twig )
md websoccer\modules\teamofday\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\termsandconditions\views"
set FILE_LIST= ( termsandconditions.twig )
md websoccer\modules\termsandconditions\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\training\views"
set FILE_LIST= ( training.twig training-trainerdetails.twig )
md websoccer\modules\training\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\trainingcamp\views"
set FILE_LIST= ( camp-details.twig trainingcamp.twig )
md websoccer\modules\trainingcamp\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\transfermarket\blocks"
set FILE_LIST= ( transfer-bid-block.twig transfer-bids-list.twig transfers-list.twig )
md websoccer\modules\transfermarket\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\transfermarket\views"
set FILE_LIST= ( sell-player.twig transfer-bid.twig transfermarket-overview.twig )
md websoccer\modules\transfermarket\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\transferoffers\blocks"
set FILE_LIST= ( directtransfer-offer-form.twig directtransfer-offer.twig directtransfer-sentoffers.twig )
md websoccer\modules\transferoffers\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\transferoffers\views"
set FILE_LIST= ( transferoffers.twig )
md websoccer\modules\transferoffers\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\userabsence\blocks"
set FILE_LIST= ( absence_alert.twig )
md websoccer\modules\userabsence\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\userabsence\views"
set FILE_LIST= ( absence.twig )
md websoccer\modules\userabsence\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\userbadges\views"
set FILE_LIST= ( badges.twig )
md websoccer\modules\userbadges\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\userregistration\emails"
set FILE_LIST= ( changed_email_activation.twig sendpassword.twig sendpassword_admin.twig useractivation.twig )
md websoccer\modules\userregistration\emails
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\userregistration\views"
set FILE_LIST= ( register-form.twig register-success.twig )
md websoccer\modules\userregistration\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\users\blocks"
set FILE_LIST= ( user_history.twig )
md websoccer\modules\users\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\users\views"
set FILE_LIST= ( user-details.twig users-highscore.twig )
md websoccer\modules\users\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\usersonline\views"
set FILE_LIST= ( who_is_online.twig )
md websoccer\modules\usersonline\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%

set MODULE_PATH="websoccer\modules\youth\blocks"
set FILE_LIST= ( youth_playerdetails.twig youth_players_of_team.twig )
md websoccer\modules\youth\blocks
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%
set MODULE_PATH="websoccer\modules\youth\views"
set FILE_LIST= ( youth_buy.twig youth_fire.twig youth_formation.twig youth_makeprofessional.twig youth_marketplace.twig youth_match.twig youth_matches.twig youth_matchrequests.twig youth_matchrequests_create.twig youth_scouting.twig youth_sell.twig youth_team.twig )
md websoccer\modules\youth\views
for %%i in %FILE_LIST% do move %TEMPLATE_PATH%\%%i %MODULE_PATH%