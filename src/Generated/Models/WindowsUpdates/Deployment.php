<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Deployment extends Entity implements Parsable 
{
    /**
     * Instantiates a new deployment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Deployment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Deployment {
        return new Deployment();
    }

    /**
     * Gets the audience property value. Specifies the audience to which content is deployed.
     * @return DeploymentAudience|null
    */
    public function getAudience(): ?DeploymentAudience {
        $val = $this->getBackingStore()->get('audience');
        if (is_null($val) || $val instanceof DeploymentAudience) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audience'");
    }

    /**
     * Gets the content property value. Specifies what content to deploy. Cannot be changed. Returned by default.
     * @return DeployableContent|null
    */
    public function getContent(): ?DeployableContent {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof DeployableContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the deployment was created. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getObjectValue([DeploymentAudience::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([DeployableContent::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([DeploymentSettings::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getObjectValue([DeploymentState::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the deployment was last modified. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Gets the settings property value. Settings specified on the specific deployment governing how to deploy content. Returned by default.
     * @return DeploymentSettings|null
    */
    public function getSettings(): ?DeploymentSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof DeploymentSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the state property value. Execution status of the deployment. Returned by default.
     * @return DeploymentState|null
    */
    public function getState(): ?DeploymentState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof DeploymentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('audience', $this->getAudience());
        $writer->writeObjectValue('content', $this->getContent());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('state', $this->getState());
    }

    /**
     * Sets the audience property value. Specifies the audience to which content is deployed.
     * @param DeploymentAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?DeploymentAudience $value): void {
        $this->getBackingStore()->set('audience', $value);
    }

    /**
     * Sets the content property value. Specifies what content to deploy. Cannot be changed. Returned by default.
     * @param DeployableContent|null $value Value to set for the content property.
    */
    public function setContent(?DeployableContent $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the deployment was created. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the deployment was last modified. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settings property value. Settings specified on the specific deployment governing how to deploy content. Returned by default.
     * @param DeploymentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?DeploymentSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the state property value. Execution status of the deployment. Returned by default.
     * @param DeploymentState|null $value Value to set for the state property.
    */
    public function setState(?DeploymentState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
