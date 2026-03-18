<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceBaseAuditRecord extends BaseAuditRecord implements Parsable 
{
    /**
     * Instantiates a new ComplianceBaseAuditRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.dlp.complianceBaseAuditRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceBaseAuditRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceBaseAuditRecord {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.dlp.complianceDLPBaseAuditRecord': return new ComplianceDLPBaseAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpEndpointAuditRecord': return new ComplianceDlpEndpointAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpExchangeAuditRecord': return new ComplianceDlpExchangeAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpSharePointAuditRecord': return new ComplianceDlpSharePointAuditRecord();
            }
        }
        return new ComplianceBaseAuditRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
