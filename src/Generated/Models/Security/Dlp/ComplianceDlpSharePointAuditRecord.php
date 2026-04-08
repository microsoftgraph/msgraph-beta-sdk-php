<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceDlpSharePointAuditRecord extends ComplianceDLPBaseAuditRecord implements Parsable 
{
    /**
     * Instantiates a new ComplianceDlpSharePointAuditRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.dlp.complianceDlpSharePointAuditRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceDlpSharePointAuditRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceDlpSharePointAuditRecord {
        return new ComplianceDlpSharePointAuditRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sharePointMetaData' => fn(ParseNode $n) => $o->setSharePointMetaData($n->getObjectValue([SharePointMetaDataInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sharePointMetaData property value. The sharePointMetaData property
     * @return SharePointMetaDataInfo|null
    */
    public function getSharePointMetaData(): ?SharePointMetaDataInfo {
        $val = $this->getBackingStore()->get('sharePointMetaData');
        if (is_null($val) || $val instanceof SharePointMetaDataInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointMetaData'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('sharePointMetaData', $this->getSharePointMetaData());
    }

    /**
     * Sets the sharePointMetaData property value. The sharePointMetaData property
     * @param SharePointMetaDataInfo|null $value Value to set for the sharePointMetaData property.
    */
    public function setSharePointMetaData(?SharePointMetaDataInfo $value): void {
        $this->getBackingStore()->set('sharePointMetaData', $value);
    }

}
