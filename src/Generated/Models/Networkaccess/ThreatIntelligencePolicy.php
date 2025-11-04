<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatIntelligencePolicy extends Policy implements Parsable 
{
    /**
     * Instantiates a new ThreatIntelligencePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.threatIntelligencePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatIntelligencePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatIntelligencePolicy {
        return new ThreatIntelligencePolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([ThreatIntelligencePolicySettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the policy was last modified.
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
     * Gets the settings property value. The settings property
     * @return ThreatIntelligencePolicySettings|null
    */
    public function getSettings(): ?ThreatIntelligencePolicySettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof ThreatIntelligencePolicySettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the policy was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param ThreatIntelligencePolicySettings|null $value Value to set for the settings property.
    */
    public function setSettings(?ThreatIntelligencePolicySettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
