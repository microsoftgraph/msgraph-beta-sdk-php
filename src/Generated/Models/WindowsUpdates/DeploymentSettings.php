<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeploymentSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deploymentSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentSettings {
        return new DeploymentSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentApplicability property value. Settings for governing whether content is applicable to a device.
     * @return ContentApplicabilitySettings|null
    */
    public function getContentApplicability(): ?ContentApplicabilitySettings {
        $val = $this->getBackingStore()->get('contentApplicability');
        if (is_null($val) || $val instanceof ContentApplicabilitySettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentApplicability'");
    }

    /**
     * Gets the expedite property value. Settings for governing whether updates should be expedited.
     * @return ExpediteSettings|null
    */
    public function getExpedite(): ?ExpediteSettings {
        $val = $this->getBackingStore()->get('expedite');
        if (is_null($val) || $val instanceof ExpediteSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expedite'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentApplicability' => fn(ParseNode $n) => $o->setContentApplicability($n->getObjectValue([ContentApplicabilitySettings::class, 'createFromDiscriminatorValue'])),
            'expedite' => fn(ParseNode $n) => $o->setExpedite($n->getObjectValue([ExpediteSettings::class, 'createFromDiscriminatorValue'])),
            'monitoring' => fn(ParseNode $n) => $o->setMonitoring($n->getObjectValue([MonitoringSettings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([ScheduleSettings::class, 'createFromDiscriminatorValue'])),
            'userExperience' => fn(ParseNode $n) => $o->setUserExperience($n->getObjectValue([UserExperienceSettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the monitoring property value. Settings for governing conditions to monitor and automated actions to take.
     * @return MonitoringSettings|null
    */
    public function getMonitoring(): ?MonitoringSettings {
        $val = $this->getBackingStore()->get('monitoring');
        if (is_null($val) || $val instanceof MonitoringSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monitoring'");
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
     * Gets the schedule property value. Settings for governing how and when the content is rolled out.
     * @return ScheduleSettings|null
    */
    public function getSchedule(): ?ScheduleSettings {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof ScheduleSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the userExperience property value. Settings for governing end user update experience.
     * @return UserExperienceSettings|null
    */
    public function getUserExperience(): ?UserExperienceSettings {
        $val = $this->getBackingStore()->get('userExperience');
        if (is_null($val) || $val instanceof UserExperienceSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperience'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contentApplicability', $this->getContentApplicability());
        $writer->writeObjectValue('expedite', $this->getExpedite());
        $writer->writeObjectValue('monitoring', $this->getMonitoring());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeObjectValue('userExperience', $this->getUserExperience());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentApplicability property value. Settings for governing whether content is applicable to a device.
     * @param ContentApplicabilitySettings|null $value Value to set for the contentApplicability property.
    */
    public function setContentApplicability(?ContentApplicabilitySettings $value): void {
        $this->getBackingStore()->set('contentApplicability', $value);
    }

    /**
     * Sets the expedite property value. Settings for governing whether updates should be expedited.
     * @param ExpediteSettings|null $value Value to set for the expedite property.
    */
    public function setExpedite(?ExpediteSettings $value): void {
        $this->getBackingStore()->set('expedite', $value);
    }

    /**
     * Sets the monitoring property value. Settings for governing conditions to monitor and automated actions to take.
     * @param MonitoringSettings|null $value Value to set for the monitoring property.
    */
    public function setMonitoring(?MonitoringSettings $value): void {
        $this->getBackingStore()->set('monitoring', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the schedule property value. Settings for governing how and when the content is rolled out.
     * @param ScheduleSettings|null $value Value to set for the schedule property.
    */
    public function setSchedule(?ScheduleSettings $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the userExperience property value. Settings for governing end user update experience.
     * @param UserExperienceSettings|null $value Value to set for the userExperience property.
    */
    public function setUserExperience(?UserExperienceSettings $value): void {
        $this->getBackingStore()->set('userExperience', $value);
    }

}
