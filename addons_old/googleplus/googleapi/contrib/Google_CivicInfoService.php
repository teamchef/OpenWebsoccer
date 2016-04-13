<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "elections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_CivicInfoService(...);
 *   $elections = $civicinfoService->elections;
 *  </code>
 */
class Google_ElectionsServiceResource extends Google_ServiceResource
{

    /**
     * List of available elections to query. (elections.electionQuery)
     *
     * @param array $optParams Optional parameters.
     * @return Google_ElectionsQueryResponse
     * @throws Google_Exception
     */
    public function electionQuery($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('electionQuery', [$params]);
        if ($this->useObjects()) {
            return new Google_ElectionsQueryResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Looks up information relevant to a voter based on the voter's registered address.
     * (elections.voterInfoQuery)
     *
     * @param string $electionId The unique ID of the election to look up. A list of election IDs can be obtained at.https://www.googleapis.com/civicinfo/{version}/elections
     * @param Google_VoterInfoRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_VoterInfoResponse
     * @throws Google_Exception
     * @opt_param bool officialOnly If set to true, only data from official state sources will be returned.
     */
    public function voterInfoQuery($electionId, Google_VoterInfoRequest $postBody, $optParams = [])
    {
        $params = ['electionId' => $electionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('voterInfoQuery', [$params]);
        if ($this->useObjects()) {
            return new Google_VoterInfoResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_CivicInfo (us_v1).
 *
 * <p>
 * An API for accessing civic information.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/civic-information" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_CivicInfoService extends Google_Service
{
    /**
     * @var Google_ElectionsServiceResource
     */
    public $elections;

    /**
     * Constructs the internal representation of the CivicInfo service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'civicinfo/us_v1/';
        $this->version = 'us_v1';
        $this->serviceName = 'civicinfo';

        $client->addService($this->serviceName, $this->version);
        $this->elections = new Google_ElectionsServiceResource($this, $this->serviceName, 'elections', json_decode('{"methods": {"electionQuery": {"id": "civicinfo.elections.electionQuery", "path": "elections", "httpMethod": "GET", "response": {"$ref": "ElectionsQueryResponse"}}, "voterInfoQuery": {"id": "civicinfo.elections.voterInfoQuery", "path": "voterinfo/{electionId}/lookup", "httpMethod": "POST", "parameters": {"electionId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "officialOnly": {"type": "boolean", "default": "false", "location": "query"}}, "request": {"$ref": "VoterInfoRequest"}, "response": {"$ref": "VoterInfoResponse"}}}}', true));

    }
}


/**
 * Class Google_AdministrationRegion
 */
class Google_AdministrationRegion extends Google_Model
{
    /**
     * @var string
     */
    protected $__electionAdministrationBodyType = 'Google_AdministrativeBody';
    /**
     * @var string
     */
    protected $__electionAdministrationBodyDataType = '';
    /**
     * @var
     */
    public $electionAdministrationBody;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__local_jurisdictionType = 'Google_AdministrationRegion';
    /**
     * @var string
     */
    protected $__local_jurisdictionDataType = '';
    /**
     * @var
     */
    public $local_jurisdiction;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__sourcesType = 'Google_Source';
    /**
     * @var string
     */
    protected $__sourcesDataType = 'array';
    /**
     * @var
     */
    public $sources;

    /**
     * @param Google_AdministrativeBody $electionAdministrationBody
     */
    public function setElectionAdministrationBody(Google_AdministrativeBody $electionAdministrationBody)
    {
        $this->electionAdministrationBody = $electionAdministrationBody;
    }

    /**
     * @return mixed
     */
    public function getElectionAdministrationBody()
    {
        return $this->electionAdministrationBody;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Google_AdministrationRegion $local_jurisdiction
     */
    public function setLocal_jurisdiction(Google_AdministrationRegion $local_jurisdiction)
    {
        $this->local_jurisdiction = $local_jurisdiction;
    }

    /**
     * @return mixed
     */
    public function getLocal_jurisdiction()
    {
        return $this->local_jurisdiction;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $sources
     * @throws Google_Exception
     */
    public function setSources(/* array(Google_Source) */
        $sources)
    {
        $this->assertIsArray($sources, 'Google_Source', __METHOD__);
        $this->sources = $sources;
    }

    /**
     * @return mixed
     */
    public function getSources()
    {
        return $this->sources;
    }
}

/**
 * Class Google_AdministrativeBody
 */
class Google_AdministrativeBody extends Google_Model
{
    /**
     * @var
     */
    public $absenteeVotingInfoUrl;
    /**
     * @var
     */
    public $ballotInfoUrl;
    /**
     * @var string
     */
    protected $__correspondenceAddressType = 'Google_SimpleAddressType';
    /**
     * @var string
     */
    protected $__correspondenceAddressDataType = '';
    /**
     * @var
     */
    public $correspondenceAddress;
    /**
     * @var
     */
    public $electionInfoUrl;
    /**
     * @var string
     */
    protected $__electionOfficialsType = 'Google_ElectionOfficial';
    /**
     * @var string
     */
    protected $__electionOfficialsDataType = 'array';
    /**
     * @var
     */
    public $electionOfficials;
    /**
     * @var
     */
    public $electionRegistrationConfirmationUrl;
    /**
     * @var
     */
    public $electionRegistrationUrl;
    /**
     * @var
     */
    public $electionRulesUrl;
    /**
     * @var
     */
    public $hoursOfOperation;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__physicalAddressType = 'Google_SimpleAddressType';
    /**
     * @var string
     */
    protected $__physicalAddressDataType = '';
    /**
     * @var
     */
    public $physicalAddress;
    /**
     * @var
     */
    public $voter_services;
    /**
     * @var
     */
    public $votingLocationFinderUrl;

    /**
     * @param $absenteeVotingInfoUrl
     */
    public function setAbsenteeVotingInfoUrl($absenteeVotingInfoUrl)
    {
        $this->absenteeVotingInfoUrl = $absenteeVotingInfoUrl;
    }

    /**
     * @return mixed
     */
    public function getAbsenteeVotingInfoUrl()
    {
        return $this->absenteeVotingInfoUrl;
    }

    /**
     * @param $ballotInfoUrl
     */
    public function setBallotInfoUrl($ballotInfoUrl)
    {
        $this->ballotInfoUrl = $ballotInfoUrl;
    }

    /**
     * @return mixed
     */
    public function getBallotInfoUrl()
    {
        return $this->ballotInfoUrl;
    }

    /**
     * @param Google_SimpleAddressType $correspondenceAddress
     */
    public function setCorrespondenceAddress(Google_SimpleAddressType $correspondenceAddress)
    {
        $this->correspondenceAddress = $correspondenceAddress;
    }

    /**
     * @return mixed
     */
    public function getCorrespondenceAddress()
    {
        return $this->correspondenceAddress;
    }

    /**
     * @param $electionInfoUrl
     */
    public function setElectionInfoUrl($electionInfoUrl)
    {
        $this->electionInfoUrl = $electionInfoUrl;
    }

    /**
     * @return mixed
     */
    public function getElectionInfoUrl()
    {
        return $this->electionInfoUrl;
    }

    /**
     * @param $electionOfficials
     * @throws Google_Exception
     */
    public function setElectionOfficials(/* array(Google_ElectionOfficial) */
        $electionOfficials)
    {
        $this->assertIsArray($electionOfficials, 'Google_ElectionOfficial', __METHOD__);
        $this->electionOfficials = $electionOfficials;
    }

    /**
     * @return mixed
     */
    public function getElectionOfficials()
    {
        return $this->electionOfficials;
    }

    /**
     * @param $electionRegistrationConfirmationUrl
     */
    public function setElectionRegistrationConfirmationUrl($electionRegistrationConfirmationUrl)
    {
        $this->electionRegistrationConfirmationUrl = $electionRegistrationConfirmationUrl;
    }

    /**
     * @return mixed
     */
    public function getElectionRegistrationConfirmationUrl()
    {
        return $this->electionRegistrationConfirmationUrl;
    }

    /**
     * @param $electionRegistrationUrl
     */
    public function setElectionRegistrationUrl($electionRegistrationUrl)
    {
        $this->electionRegistrationUrl = $electionRegistrationUrl;
    }

    /**
     * @return mixed
     */
    public function getElectionRegistrationUrl()
    {
        return $this->electionRegistrationUrl;
    }

    /**
     * @param $electionRulesUrl
     */
    public function setElectionRulesUrl($electionRulesUrl)
    {
        $this->electionRulesUrl = $electionRulesUrl;
    }

    /**
     * @return mixed
     */
    public function getElectionRulesUrl()
    {
        return $this->electionRulesUrl;
    }

    /**
     * @param $hoursOfOperation
     */
    public function setHoursOfOperation($hoursOfOperation)
    {
        $this->hoursOfOperation = $hoursOfOperation;
    }

    /**
     * @return mixed
     */
    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Google_SimpleAddressType $physicalAddress
     */
    public function setPhysicalAddress(Google_SimpleAddressType $physicalAddress)
    {
        $this->physicalAddress = $physicalAddress;
    }

    /**
     * @return mixed
     */
    public function getPhysicalAddress()
    {
        return $this->physicalAddress;
    }

    /**
     * @param $voter_services
     * @throws Google_Exception
     */
    public function setVoter_services(/* array(Google_string) */
        $voter_services)
    {
        $this->assertIsArray($voter_services, 'Google_string', __METHOD__);
        $this->voter_services = $voter_services;
    }

    /**
     * @return mixed
     */
    public function getVoter_services()
    {
        return $this->voter_services;
    }

    /**
     * @param $votingLocationFinderUrl
     */
    public function setVotingLocationFinderUrl($votingLocationFinderUrl)
    {
        $this->votingLocationFinderUrl = $votingLocationFinderUrl;
    }

    /**
     * @return mixed
     */
    public function getVotingLocationFinderUrl()
    {
        return $this->votingLocationFinderUrl;
    }
}

/**
 * Class Google_Candidate
 */
class Google_Candidate extends Google_Model
{
    /**
     * @var
     */
    public $candidateUrl;
    /**
     * @var string
     */
    protected $__channelsType = 'Google_Channel';
    /**
     * @var string
     */
    protected $__channelsDataType = 'array';
    /**
     * @var
     */
    public $channels;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $orderOnBallot;
    /**
     * @var
     */
    public $party;
    /**
     * @var
     */
    public $phone;
    /**
     * @var
     */
    public $photoUrl;

    /**
     * @param $candidateUrl
     */
    public function setCandidateUrl($candidateUrl)
    {
        $this->candidateUrl = $candidateUrl;
    }

    /**
     * @return mixed
     */
    public function getCandidateUrl()
    {
        return $this->candidateUrl;
    }

    /**
     * @param $channels
     * @throws Google_Exception
     */
    public function setChannels(/* array(Google_Channel) */
        $channels)
    {
        $this->assertIsArray($channels, 'Google_Channel', __METHOD__);
        $this->channels = $channels;
    }

    /**
     * @return mixed
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $orderOnBallot
     */
    public function setOrderOnBallot($orderOnBallot)
    {
        $this->orderOnBallot = $orderOnBallot;
    }

    /**
     * @return mixed
     */
    public function getOrderOnBallot()
    {
        return $this->orderOnBallot;
    }

    /**
     * @param $party
     */
    public function setParty($party)
    {
        $this->party = $party;
    }

    /**
     * @return mixed
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * @param $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $photoUrl
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }

    /**
     * @return mixed
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }
}

/**
 * Class Google_Channel
 */
class Google_Channel extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $type;

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

/**
 * Class Google_Contest
 */
class Google_Contest extends Google_Model
{
    /**
     * @var
     */
    public $ballotPlacement;
    /**
     * @var string
     */
    protected $__candidatesType = 'Google_Candidate';
    /**
     * @var string
     */
    protected $__candidatesDataType = 'array';
    /**
     * @var
     */
    public $candidates;
    /**
     * @var string
     */
    protected $__districtType = 'Google_ElectoralDistrict';
    /**
     * @var string
     */
    protected $__districtDataType = '';
    /**
     * @var
     */
    public $district;
    /**
     * @var
     */
    public $electorateSpecifications;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $level;
    /**
     * @var
     */
    public $numberElected;
    /**
     * @var
     */
    public $numberVotingFor;
    /**
     * @var
     */
    public $office;
    /**
     * @var
     */
    public $primaryParty;
    /**
     * @var
     */
    public $referendumSubtitle;
    /**
     * @var
     */
    public $referendumTitle;
    /**
     * @var
     */
    public $referendumUrl;
    /**
     * @var string
     */
    protected $__sourcesType = 'Google_Source';
    /**
     * @var string
     */
    protected $__sourcesDataType = 'array';
    /**
     * @var
     */
    public $sources;
    /**
     * @var
     */
    public $special;
    /**
     * @var
     */
    public $type;

    /**
     * @param $ballotPlacement
     */
    public function setBallotPlacement($ballotPlacement)
    {
        $this->ballotPlacement = $ballotPlacement;
    }

    /**
     * @return mixed
     */
    public function getBallotPlacement()
    {
        return $this->ballotPlacement;
    }

    /**
     * @param $candidates
     * @throws Google_Exception
     */
    public function setCandidates(/* array(Google_Candidate) */
        $candidates)
    {
        $this->assertIsArray($candidates, 'Google_Candidate', __METHOD__);
        $this->candidates = $candidates;
    }

    /**
     * @return mixed
     */
    public function getCandidates()
    {
        return $this->candidates;
    }

    /**
     * @param Google_ElectoralDistrict $district
     */
    public function setDistrict(Google_ElectoralDistrict $district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param $electorateSpecifications
     */
    public function setElectorateSpecifications($electorateSpecifications)
    {
        $this->electorateSpecifications = $electorateSpecifications;
    }

    /**
     * @return mixed
     */
    public function getElectorateSpecifications()
    {
        return $this->electorateSpecifications;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param $numberElected
     */
    public function setNumberElected($numberElected)
    {
        $this->numberElected = $numberElected;
    }

    /**
     * @return mixed
     */
    public function getNumberElected()
    {
        return $this->numberElected;
    }

    /**
     * @param $numberVotingFor
     */
    public function setNumberVotingFor($numberVotingFor)
    {
        $this->numberVotingFor = $numberVotingFor;
    }

    /**
     * @return mixed
     */
    public function getNumberVotingFor()
    {
        return $this->numberVotingFor;
    }

    /**
     * @param $office
     */
    public function setOffice($office)
    {
        $this->office = $office;
    }

    /**
     * @return mixed
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @param $primaryParty
     */
    public function setPrimaryParty($primaryParty)
    {
        $this->primaryParty = $primaryParty;
    }

    /**
     * @return mixed
     */
    public function getPrimaryParty()
    {
        return $this->primaryParty;
    }

    /**
     * @param $referendumSubtitle
     */
    public function setReferendumSubtitle($referendumSubtitle)
    {
        $this->referendumSubtitle = $referendumSubtitle;
    }

    /**
     * @return mixed
     */
    public function getReferendumSubtitle()
    {
        return $this->referendumSubtitle;
    }

    /**
     * @param $referendumTitle
     */
    public function setReferendumTitle($referendumTitle)
    {
        $this->referendumTitle = $referendumTitle;
    }

    /**
     * @return mixed
     */
    public function getReferendumTitle()
    {
        return $this->referendumTitle;
    }

    /**
     * @param $referendumUrl
     */
    public function setReferendumUrl($referendumUrl)
    {
        $this->referendumUrl = $referendumUrl;
    }

    /**
     * @return mixed
     */
    public function getReferendumUrl()
    {
        return $this->referendumUrl;
    }

    /**
     * @param $sources
     * @throws Google_Exception
     */
    public function setSources(/* array(Google_Source) */
        $sources)
    {
        $this->assertIsArray($sources, 'Google_Source', __METHOD__);
        $this->sources = $sources;
    }

    /**
     * @return mixed
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param $special
     */
    public function setSpecial($special)
    {
        $this->special = $special;
    }

    /**
     * @return mixed
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

/**
 * Class Google_Election
 */
class Google_Election extends Google_Model
{
    /**
     * @var
     */
    public $electionDay;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;

    /**
     * @param $electionDay
     */
    public function setElectionDay($electionDay)
    {
        $this->electionDay = $electionDay;
    }

    /**
     * @return mixed
     */
    public function getElectionDay()
    {
        return $this->electionDay;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

/**
 * Class Google_ElectionOfficial
 */
class Google_ElectionOfficial extends Google_Model
{
    /**
     * @var
     */
    public $emailAddress;
    /**
     * @var
     */
    public $faxNumber;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $officePhoneNumber;
    /**
     * @var
     */
    public $title;

    /**
     * @param $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param $faxNumber
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
    }

    /**
     * @return mixed
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $officePhoneNumber
     */
    public function setOfficePhoneNumber($officePhoneNumber)
    {
        $this->officePhoneNumber = $officePhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getOfficePhoneNumber()
    {
        return $this->officePhoneNumber;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

/**
 * Class Google_ElectionsQueryResponse
 */
class Google_ElectionsQueryResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__electionsType = 'Google_Election';
    /**
     * @var string
     */
    protected $__electionsDataType = 'array';
    /**
     * @var
     */
    public $elections;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $elections
     * @throws Google_Exception
     */
    public function setElections(/* array(Google_Election) */
        $elections)
    {
        $this->assertIsArray($elections, 'Google_Election', __METHOD__);
        $this->elections = $elections;
    }

    /**
     * @return mixed
     */
    public function getElections()
    {
        return $this->elections;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }
}

/**
 * Class Google_ElectoralDistrict
 */
class Google_ElectoralDistrict extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $scope;

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }
}

/**
 * Class Google_PollingLocation
 */
class Google_PollingLocation extends Google_Model
{
    /**
     * @var string
     */
    protected $__addressType = 'Google_SimpleAddressType';
    /**
     * @var string
     */
    protected $__addressDataType = '';
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $endDate;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $notes;
    /**
     * @var
     */
    public $pollingHours;
    /**
     * @var string
     */
    protected $__sourcesType = 'Google_Source';
    /**
     * @var string
     */
    protected $__sourcesDataType = 'array';
    /**
     * @var
     */
    public $sources;
    /**
     * @var
     */
    public $startDate;
    /**
     * @var
     */
    public $voterServices;

    /**
     * @param Google_SimpleAddressType $address
     */
    public function setAddress(Google_SimpleAddressType $address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param $pollingHours
     */
    public function setPollingHours($pollingHours)
    {
        $this->pollingHours = $pollingHours;
    }

    /**
     * @return mixed
     */
    public function getPollingHours()
    {
        return $this->pollingHours;
    }

    /**
     * @param $sources
     * @throws Google_Exception
     */
    public function setSources(/* array(Google_Source) */
        $sources)
    {
        $this->assertIsArray($sources, 'Google_Source', __METHOD__);
        $this->sources = $sources;
    }

    /**
     * @return mixed
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param $voterServices
     */
    public function setVoterServices($voterServices)
    {
        $this->voterServices = $voterServices;
    }

    /**
     * @return mixed
     */
    public function getVoterServices()
    {
        return $this->voterServices;
    }
}

/**
 * Class Google_SimpleAddressType
 */
class Google_SimpleAddressType extends Google_Model
{
    /**
     * @var
     */
    public $city;
    /**
     * @var
     */
    public $line1;
    /**
     * @var
     */
    public $line2;
    /**
     * @var
     */
    public $line3;
    /**
     * @var
     */
    public $locationName;
    /**
     * @var
     */
    public $state;
    /**
     * @var
     */
    public $zip;

    /**
     * @param $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $line1
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;
    }

    /**
     * @return mixed
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * @param $line2
     */
    public function setLine2($line2)
    {
        $this->line2 = $line2;
    }

    /**
     * @return mixed
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * @param $line3
     */
    public function setLine3($line3)
    {
        $this->line3 = $line3;
    }

    /**
     * @return mixed
     */
    public function getLine3()
    {
        return $this->line3;
    }

    /**
     * @param $locationName
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    /**
     * @return mixed
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }
}

/**
 * Class Google_Source
 */
class Google_Source extends Google_Model
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $official;

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $official
     */
    public function setOfficial($official)
    {
        $this->official = $official;
    }

    /**
     * @return mixed
     */
    public function getOfficial()
    {
        return $this->official;
    }
}

/**
 * Class Google_VoterInfoRequest
 */
class Google_VoterInfoRequest extends Google_Model
{
    /**
     * @var
     */
    public $address;

    /**
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
}

/**
 * Class Google_VoterInfoResponse
 */
class Google_VoterInfoResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__contestsType = 'Google_Contest';
    /**
     * @var string
     */
    protected $__contestsDataType = 'array';
    /**
     * @var
     */
    public $contests;
    /**
     * @var string
     */
    protected $__earlyVoteSitesType = 'Google_PollingLocation';
    /**
     * @var string
     */
    protected $__earlyVoteSitesDataType = 'array';
    /**
     * @var
     */
    public $earlyVoteSites;
    /**
     * @var string
     */
    protected $__electionType = 'Google_Election';
    /**
     * @var string
     */
    protected $__electionDataType = '';
    /**
     * @var
     */
    public $election;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__normalizedInputType = 'Google_SimpleAddressType';
    /**
     * @var string
     */
    protected $__normalizedInputDataType = '';
    /**
     * @var
     */
    public $normalizedInput;
    /**
     * @var string
     */
    protected $__pollingLocationsType = 'Google_PollingLocation';
    /**
     * @var string
     */
    protected $__pollingLocationsDataType = 'array';
    /**
     * @var
     */
    public $pollingLocations;
    /**
     * @var string
     */
    protected $__stateType = 'Google_AdministrationRegion';
    /**
     * @var string
     */
    protected $__stateDataType = 'array';
    /**
     * @var
     */
    public $state;
    /**
     * @var
     */
    public $status;

    /**
     * @param $contests
     * @throws Google_Exception
     */
    public function setContests(/* array(Google_Contest) */
        $contests)
    {
        $this->assertIsArray($contests, 'Google_Contest', __METHOD__);
        $this->contests = $contests;
    }

    /**
     * @return mixed
     */
    public function getContests()
    {
        return $this->contests;
    }

    /**
     * @param $earlyVoteSites
     * @throws Google_Exception
     */
    public function setEarlyVoteSites(/* array(Google_PollingLocation) */
        $earlyVoteSites)
    {
        $this->assertIsArray($earlyVoteSites, 'Google_PollingLocation', __METHOD__);
        $this->earlyVoteSites = $earlyVoteSites;
    }

    /**
     * @return mixed
     */
    public function getEarlyVoteSites()
    {
        return $this->earlyVoteSites;
    }

    /**
     * @param Google_Election $election
     */
    public function setElection(Google_Election $election)
    {
        $this->election = $election;
    }

    /**
     * @return mixed
     */
    public function getElection()
    {
        return $this->election;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param Google_SimpleAddressType $normalizedInput
     */
    public function setNormalizedInput(Google_SimpleAddressType $normalizedInput)
    {
        $this->normalizedInput = $normalizedInput;
    }

    /**
     * @return mixed
     */
    public function getNormalizedInput()
    {
        return $this->normalizedInput;
    }

    /**
     * @param $pollingLocations
     * @throws Google_Exception
     */
    public function setPollingLocations(/* array(Google_PollingLocation) */
        $pollingLocations)
    {
        $this->assertIsArray($pollingLocations, 'Google_PollingLocation', __METHOD__);
        $this->pollingLocations = $pollingLocations;
    }

    /**
     * @return mixed
     */
    public function getPollingLocations()
    {
        return $this->pollingLocations;
    }

    /**
     * @param $state
     * @throws Google_Exception
     */
    public function setState(/* array(Google_AdministrationRegion) */
        $state)
    {
        $this->assertIsArray($state, 'Google_AdministrationRegion', __METHOD__);
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
