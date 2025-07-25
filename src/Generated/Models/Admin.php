<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\TeamsAdministration\TeamsAdminRoot;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Admin implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Admin and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Admin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Admin {
        return new Admin();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the appsAndServices property value. The appsAndServices property
     * @return AdminAppsAndServices|null
    */
    public function getAppsAndServices(): ?AdminAppsAndServices {
        $val = $this->getBackingStore()->get('appsAndServices');
        if (is_null($val) || $val instanceof AdminAppsAndServices) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsAndServices'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the configurationManagement property value. The configurationManagement property
     * @return ConfigurationManagement|null
    */
    public function getConfigurationManagement(): ?ConfigurationManagement {
        $val = $this->getBackingStore()->get('configurationManagement');
        if (is_null($val) || $val instanceof ConfigurationManagement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationManagement'");
    }

    /**
     * Gets the dynamics property value. The dynamics property
     * @return AdminDynamics|null
    */
    public function getDynamics(): ?AdminDynamics {
        $val = $this->getBackingStore()->get('dynamics');
        if (is_null($val) || $val instanceof AdminDynamics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dynamics'");
    }

    /**
     * Gets the edge property value. A container for Microsoft Edge resources. Read-only.
     * @return Edge|null
    */
    public function getEdge(): ?Edge {
        $val = $this->getBackingStore()->get('edge');
        if (is_null($val) || $val instanceof Edge) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edge'");
    }

    /**
     * Gets the entra property value. A container for Microsoft Entra resources. Read-only.
     * @return Entra|null
    */
    public function getEntra(): ?Entra {
        $val = $this->getBackingStore()->get('entra');
        if (is_null($val) || $val instanceof Entra) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entra'");
    }

    /**
     * Gets the exchange property value. A container for the Exchange admin functionality. Read-only.
     * @return ExchangeAdmin|null
    */
    public function getExchange(): ?ExchangeAdmin {
        $val = $this->getBackingStore()->get('exchange');
        if (is_null($val) || $val instanceof ExchangeAdmin) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchange'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appsAndServices' => fn(ParseNode $n) => $o->setAppsAndServices($n->getObjectValue([AdminAppsAndServices::class, 'createFromDiscriminatorValue'])),
            'configurationManagement' => fn(ParseNode $n) => $o->setConfigurationManagement($n->getObjectValue([ConfigurationManagement::class, 'createFromDiscriminatorValue'])),
            'dynamics' => fn(ParseNode $n) => $o->setDynamics($n->getObjectValue([AdminDynamics::class, 'createFromDiscriminatorValue'])),
            'edge' => fn(ParseNode $n) => $o->setEdge($n->getObjectValue([Edge::class, 'createFromDiscriminatorValue'])),
            'entra' => fn(ParseNode $n) => $o->setEntra($n->getObjectValue([Entra::class, 'createFromDiscriminatorValue'])),
            'exchange' => fn(ParseNode $n) => $o->setExchange($n->getObjectValue([ExchangeAdmin::class, 'createFromDiscriminatorValue'])),
            'forms' => fn(ParseNode $n) => $o->setForms($n->getObjectValue([AdminForms::class, 'createFromDiscriminatorValue'])),
            'microsoft365Apps' => fn(ParseNode $n) => $o->setMicrosoft365Apps($n->getObjectValue([AdminMicrosoft365Apps::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'people' => fn(ParseNode $n) => $o->setPeople($n->getObjectValue([PeopleAdminSettings::class, 'createFromDiscriminatorValue'])),
            'reportSettings' => fn(ParseNode $n) => $o->setReportSettings($n->getObjectValue([AdminReportSettings::class, 'createFromDiscriminatorValue'])),
            'serviceAnnouncement' => fn(ParseNode $n) => $o->setServiceAnnouncement($n->getObjectValue([ServiceAnnouncement::class, 'createFromDiscriminatorValue'])),
            'sharepoint' => fn(ParseNode $n) => $o->setSharepoint($n->getObjectValue([Sharepoint::class, 'createFromDiscriminatorValue'])),
            'teams' => fn(ParseNode $n) => $o->setTeams($n->getObjectValue([TeamsAdminRoot::class, 'createFromDiscriminatorValue'])),
            'todo' => fn(ParseNode $n) => $o->setTodo($n->getObjectValue([AdminTodo::class, 'createFromDiscriminatorValue'])),
            'windows' => fn(ParseNode $n) => $o->setWindows($n->getObjectValue([AdminWindows::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the forms property value. The forms property
     * @return AdminForms|null
    */
    public function getForms(): ?AdminForms {
        $val = $this->getBackingStore()->get('forms');
        if (is_null($val) || $val instanceof AdminForms) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forms'");
    }

    /**
     * Gets the microsoft365Apps property value. A container for the Microsoft 365 apps admin functionality.
     * @return AdminMicrosoft365Apps|null
    */
    public function getMicrosoft365Apps(): ?AdminMicrosoft365Apps {
        $val = $this->getBackingStore()->get('microsoft365Apps');
        if (is_null($val) || $val instanceof AdminMicrosoft365Apps) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoft365Apps'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the people property value. Represents a setting to control people-related admin settings in the tenant.
     * @return PeopleAdminSettings|null
    */
    public function getPeople(): ?PeopleAdminSettings {
        $val = $this->getBackingStore()->get('people');
        if (is_null($val) || $val instanceof PeopleAdminSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'people'");
    }

    /**
     * Gets the reportSettings property value. A container for administrative resources to manage reports.
     * @return AdminReportSettings|null
    */
    public function getReportSettings(): ?AdminReportSettings {
        $val = $this->getBackingStore()->get('reportSettings');
        if (is_null($val) || $val instanceof AdminReportSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportSettings'");
    }

    /**
     * Gets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @return ServiceAnnouncement|null
    */
    public function getServiceAnnouncement(): ?ServiceAnnouncement {
        $val = $this->getBackingStore()->get('serviceAnnouncement');
        if (is_null($val) || $val instanceof ServiceAnnouncement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceAnnouncement'");
    }

    /**
     * Gets the sharepoint property value. The sharepoint property
     * @return Sharepoint|null
    */
    public function getSharepoint(): ?Sharepoint {
        $val = $this->getBackingStore()->get('sharepoint');
        if (is_null($val) || $val instanceof Sharepoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharepoint'");
    }

    /**
     * Gets the teams property value. Represents a collection of user configurations.
     * @return TeamsAdminRoot|null
    */
    public function getTeams(): ?TeamsAdminRoot {
        $val = $this->getBackingStore()->get('teams');
        if (is_null($val) || $val instanceof TeamsAdminRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teams'");
    }

    /**
     * Gets the todo property value. The todo property
     * @return AdminTodo|null
    */
    public function getTodo(): ?AdminTodo {
        $val = $this->getBackingStore()->get('todo');
        if (is_null($val) || $val instanceof AdminTodo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'todo'");
    }

    /**
     * Gets the windows property value. A container for all Windows administrator functionalities. Read-only.
     * @return AdminWindows|null
    */
    public function getWindows(): ?AdminWindows {
        $val = $this->getBackingStore()->get('windows');
        if (is_null($val) || $val instanceof AdminWindows) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windows'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('appsAndServices', $this->getAppsAndServices());
        $writer->writeObjectValue('configurationManagement', $this->getConfigurationManagement());
        $writer->writeObjectValue('dynamics', $this->getDynamics());
        $writer->writeObjectValue('edge', $this->getEdge());
        $writer->writeObjectValue('entra', $this->getEntra());
        $writer->writeObjectValue('exchange', $this->getExchange());
        $writer->writeObjectValue('forms', $this->getForms());
        $writer->writeObjectValue('microsoft365Apps', $this->getMicrosoft365Apps());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('people', $this->getPeople());
        $writer->writeObjectValue('reportSettings', $this->getReportSettings());
        $writer->writeObjectValue('serviceAnnouncement', $this->getServiceAnnouncement());
        $writer->writeObjectValue('sharepoint', $this->getSharepoint());
        $writer->writeObjectValue('teams', $this->getTeams());
        $writer->writeObjectValue('todo', $this->getTodo());
        $writer->writeObjectValue('windows', $this->getWindows());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appsAndServices property value. The appsAndServices property
     * @param AdminAppsAndServices|null $value Value to set for the appsAndServices property.
    */
    public function setAppsAndServices(?AdminAppsAndServices $value): void {
        $this->getBackingStore()->set('appsAndServices', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the configurationManagement property value. The configurationManagement property
     * @param ConfigurationManagement|null $value Value to set for the configurationManagement property.
    */
    public function setConfigurationManagement(?ConfigurationManagement $value): void {
        $this->getBackingStore()->set('configurationManagement', $value);
    }

    /**
     * Sets the dynamics property value. The dynamics property
     * @param AdminDynamics|null $value Value to set for the dynamics property.
    */
    public function setDynamics(?AdminDynamics $value): void {
        $this->getBackingStore()->set('dynamics', $value);
    }

    /**
     * Sets the edge property value. A container for Microsoft Edge resources. Read-only.
     * @param Edge|null $value Value to set for the edge property.
    */
    public function setEdge(?Edge $value): void {
        $this->getBackingStore()->set('edge', $value);
    }

    /**
     * Sets the entra property value. A container for Microsoft Entra resources. Read-only.
     * @param Entra|null $value Value to set for the entra property.
    */
    public function setEntra(?Entra $value): void {
        $this->getBackingStore()->set('entra', $value);
    }

    /**
     * Sets the exchange property value. A container for the Exchange admin functionality. Read-only.
     * @param ExchangeAdmin|null $value Value to set for the exchange property.
    */
    public function setExchange(?ExchangeAdmin $value): void {
        $this->getBackingStore()->set('exchange', $value);
    }

    /**
     * Sets the forms property value. The forms property
     * @param AdminForms|null $value Value to set for the forms property.
    */
    public function setForms(?AdminForms $value): void {
        $this->getBackingStore()->set('forms', $value);
    }

    /**
     * Sets the microsoft365Apps property value. A container for the Microsoft 365 apps admin functionality.
     * @param AdminMicrosoft365Apps|null $value Value to set for the microsoft365Apps property.
    */
    public function setMicrosoft365Apps(?AdminMicrosoft365Apps $value): void {
        $this->getBackingStore()->set('microsoft365Apps', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the people property value. Represents a setting to control people-related admin settings in the tenant.
     * @param PeopleAdminSettings|null $value Value to set for the people property.
    */
    public function setPeople(?PeopleAdminSettings $value): void {
        $this->getBackingStore()->set('people', $value);
    }

    /**
     * Sets the reportSettings property value. A container for administrative resources to manage reports.
     * @param AdminReportSettings|null $value Value to set for the reportSettings property.
    */
    public function setReportSettings(?AdminReportSettings $value): void {
        $this->getBackingStore()->set('reportSettings', $value);
    }

    /**
     * Sets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @param ServiceAnnouncement|null $value Value to set for the serviceAnnouncement property.
    */
    public function setServiceAnnouncement(?ServiceAnnouncement $value): void {
        $this->getBackingStore()->set('serviceAnnouncement', $value);
    }

    /**
     * Sets the sharepoint property value. The sharepoint property
     * @param Sharepoint|null $value Value to set for the sharepoint property.
    */
    public function setSharepoint(?Sharepoint $value): void {
        $this->getBackingStore()->set('sharepoint', $value);
    }

    /**
     * Sets the teams property value. Represents a collection of user configurations.
     * @param TeamsAdminRoot|null $value Value to set for the teams property.
    */
    public function setTeams(?TeamsAdminRoot $value): void {
        $this->getBackingStore()->set('teams', $value);
    }

    /**
     * Sets the todo property value. The todo property
     * @param AdminTodo|null $value Value to set for the todo property.
    */
    public function setTodo(?AdminTodo $value): void {
        $this->getBackingStore()->set('todo', $value);
    }

    /**
     * Sets the windows property value. A container for all Windows administrator functionalities. Read-only.
     * @param AdminWindows|null $value Value to set for the windows property.
    */
    public function setWindows(?AdminWindows $value): void {
        $this->getBackingStore()->set('windows', $value);
    }

}
