<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceDlpExchangeAuditRecord extends ComplianceDLPBaseAuditRecord implements Parsable 
{
    /**
     * Instantiates a new ComplianceDlpExchangeAuditRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.dlp.complianceDlpExchangeAuditRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceDlpExchangeAuditRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceDlpExchangeAuditRecord {
        return new ComplianceDlpExchangeAuditRecord();
    }

    /**
     * Gets the exchangeMetaData property value. The exchangeMetaData property
     * @return ExchangeMetaDataInfo|null
    */
    public function getExchangeMetaData(): ?ExchangeMetaDataInfo {
        $val = $this->getBackingStore()->get('exchangeMetaData');
        if (is_null($val) || $val instanceof ExchangeMetaDataInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeMetaData'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchangeMetaData' => fn(ParseNode $n) => $o->setExchangeMetaData($n->getObjectValue([ExchangeMetaDataInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('exchangeMetaData', $this->getExchangeMetaData());
    }

    /**
     * Sets the exchangeMetaData property value. The exchangeMetaData property
     * @param ExchangeMetaDataInfo|null $value Value to set for the exchangeMetaData property.
    */
    public function setExchangeMetaData(?ExchangeMetaDataInfo $value): void {
        $this->getBackingStore()->set('exchangeMetaData', $value);
    }

}
