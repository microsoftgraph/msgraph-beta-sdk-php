<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Settings extends Entity implements Parsable 
{
    /**
     * Instantiates a new settings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Settings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Settings {
        return new Settings();
    }

    /**
     * Gets the conditionalAccess property value. The conditionalAccess property
     * @return ConditionalAccessSettings|null
    */
    public function getConditionalAccess(): ?ConditionalAccessSettings {
        $val = $this->getBackingStore()->get('conditionalAccess');
        if (is_null($val) || $val instanceof ConditionalAccessSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccess'");
    }

    /**
     * Gets the crossTenantAccess property value. The crossTenantAccess property
     * @return CrossTenantAccessSettings|null
    */
    public function getCrossTenantAccess(): ?CrossTenantAccessSettings {
        $val = $this->getBackingStore()->get('crossTenantAccess');
        if (is_null($val) || $val instanceof CrossTenantAccessSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossTenantAccess'");
    }

    /**
     * Gets the enrichedAuditLogs property value. The enrichedAuditLogs property
     * @return EnrichedAuditLogs|null
    */
    public function getEnrichedAuditLogs(): ?EnrichedAuditLogs {
        $val = $this->getBackingStore()->get('enrichedAuditLogs');
        if (is_null($val) || $val instanceof EnrichedAuditLogs) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrichedAuditLogs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conditionalAccess' => fn(ParseNode $n) => $o->setConditionalAccess($n->getObjectValue([ConditionalAccessSettings::class, 'createFromDiscriminatorValue'])),
            'crossTenantAccess' => fn(ParseNode $n) => $o->setCrossTenantAccess($n->getObjectValue([CrossTenantAccessSettings::class, 'createFromDiscriminatorValue'])),
            'enrichedAuditLogs' => fn(ParseNode $n) => $o->setEnrichedAuditLogs($n->getObjectValue([EnrichedAuditLogs::class, 'createFromDiscriminatorValue'])),
            'forwardingOptions' => fn(ParseNode $n) => $o->setForwardingOptions($n->getObjectValue([ForwardingOptions::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the forwardingOptions property value. The forwardingOptions property
     * @return ForwardingOptions|null
    */
    public function getForwardingOptions(): ?ForwardingOptions {
        $val = $this->getBackingStore()->get('forwardingOptions');
        if (is_null($val) || $val instanceof ForwardingOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forwardingOptions'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('conditionalAccess', $this->getConditionalAccess());
        $writer->writeObjectValue('crossTenantAccess', $this->getCrossTenantAccess());
        $writer->writeObjectValue('enrichedAuditLogs', $this->getEnrichedAuditLogs());
        $writer->writeObjectValue('forwardingOptions', $this->getForwardingOptions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the conditionalAccess property value. The conditionalAccess property
     * @param ConditionalAccessSettings|null $value Value to set for the conditionalAccess property.
    */
    public function setConditionalAccess(?ConditionalAccessSettings $value): void {
        $this->getBackingStore()->set('conditionalAccess', $value);
    }

    /**
     * Sets the crossTenantAccess property value. The crossTenantAccess property
     * @param CrossTenantAccessSettings|null $value Value to set for the crossTenantAccess property.
    */
    public function setCrossTenantAccess(?CrossTenantAccessSettings $value): void {
        $this->getBackingStore()->set('crossTenantAccess', $value);
    }

    /**
     * Sets the enrichedAuditLogs property value. The enrichedAuditLogs property
     * @param EnrichedAuditLogs|null $value Value to set for the enrichedAuditLogs property.
    */
    public function setEnrichedAuditLogs(?EnrichedAuditLogs $value): void {
        $this->getBackingStore()->set('enrichedAuditLogs', $value);
    }

    /**
     * Sets the forwardingOptions property value. The forwardingOptions property
     * @param ForwardingOptions|null $value Value to set for the forwardingOptions property.
    */
    public function setForwardingOptions(?ForwardingOptions $value): void {
        $this->getBackingStore()->set('forwardingOptions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
