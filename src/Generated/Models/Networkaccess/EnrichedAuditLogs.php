<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EnrichedAuditLogs extends Entity implements Parsable 
{
    /**
     * Instantiates a new enrichedAuditLogs and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrichedAuditLogs
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrichedAuditLogs {
        return new EnrichedAuditLogs();
    }

    /**
     * Gets the exchange property value. Exchange Online enriched audit logs settings.
     * @return EnrichedAuditLogsSettings|null
    */
    public function getExchange(): ?EnrichedAuditLogsSettings {
        $val = $this->getBackingStore()->get('exchange');
        if (is_null($val) || $val instanceof EnrichedAuditLogsSettings) {
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
        return array_merge(parent::getFieldDeserializers(), [
            'exchange' => fn(ParseNode $n) => $o->setExchange($n->getObjectValue([EnrichedAuditLogsSettings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sharepoint' => fn(ParseNode $n) => $o->setSharepoint($n->getObjectValue([EnrichedAuditLogsSettings::class, 'createFromDiscriminatorValue'])),
            'teams' => fn(ParseNode $n) => $o->setTeams($n->getObjectValue([EnrichedAuditLogsSettings::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the sharepoint property value. SharePoint Online enriched audit logs settings.
     * @return EnrichedAuditLogsSettings|null
    */
    public function getSharepoint(): ?EnrichedAuditLogsSettings {
        $val = $this->getBackingStore()->get('sharepoint');
        if (is_null($val) || $val instanceof EnrichedAuditLogsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharepoint'");
    }

    /**
     * Gets the teams property value. Teams enriched audit logs settings.
     * @return EnrichedAuditLogsSettings|null
    */
    public function getTeams(): ?EnrichedAuditLogsSettings {
        $val = $this->getBackingStore()->get('teams');
        if (is_null($val) || $val instanceof EnrichedAuditLogsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teams'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('exchange', $this->getExchange());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('sharepoint', $this->getSharepoint());
        $writer->writeObjectValue('teams', $this->getTeams());
    }

    /**
     * Sets the exchange property value. Exchange Online enriched audit logs settings.
     * @param EnrichedAuditLogsSettings|null $value Value to set for the exchange property.
    */
    public function setExchange(?EnrichedAuditLogsSettings $value): void {
        $this->getBackingStore()->set('exchange', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sharepoint property value. SharePoint Online enriched audit logs settings.
     * @param EnrichedAuditLogsSettings|null $value Value to set for the sharepoint property.
    */
    public function setSharepoint(?EnrichedAuditLogsSettings $value): void {
        $this->getBackingStore()->set('sharepoint', $value);
    }

    /**
     * Sets the teams property value. Teams enriched audit logs settings.
     * @param EnrichedAuditLogsSettings|null $value Value to set for the teams property.
    */
    public function setTeams(?EnrichedAuditLogsSettings $value): void {
        $this->getBackingStore()->set('teams', $value);
    }

}
