<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceDlpEndpointAuditRecord extends ComplianceDLPBaseAuditRecord implements Parsable 
{
    /**
     * Instantiates a new ComplianceDlpEndpointAuditRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.dlp.complianceDlpEndpointAuditRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceDlpEndpointAuditRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceDlpEndpointAuditRecord {
        return new ComplianceDlpEndpointAuditRecord();
    }

    /**
     * Gets the authorizedGroup property value. The authorizedGroup property
     * @return string|null
    */
    public function getAuthorizedGroup(): ?string {
        $val = $this->getBackingStore()->get('authorizedGroup');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizedGroup'");
    }

    /**
     * Gets the endpointMetaData property value. The endpointMetaData property
     * @return EndpointMetaDataInfo|null
    */
    public function getEndpointMetaData(): ?EndpointMetaDataInfo {
        $val = $this->getBackingStore()->get('endpointMetaData');
        if (is_null($val) || $val instanceof EndpointMetaDataInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointMetaData'");
    }

    /**
     * Gets the evidenceFile property value. The evidenceFile property
     * @return string|null
    */
    public function getEvidenceFile(): ?string {
        $val = $this->getBackingStore()->get('evidenceFile');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evidenceFile'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authorizedGroup' => fn(ParseNode $n) => $o->setAuthorizedGroup($n->getStringValue()),
            'endpointMetaData' => fn(ParseNode $n) => $o->setEndpointMetaData($n->getObjectValue([EndpointMetaDataInfo::class, 'createFromDiscriminatorValue'])),
            'evidenceFile' => fn(ParseNode $n) => $o->setEvidenceFile($n->getStringValue()),
            'networkLocationContextInAction' => fn(ParseNode $n) => $o->setNetworkLocationContextInAction($n->getStringValue()),
        ]);
    }

    /**
     * Gets the networkLocationContextInAction property value. The networkLocationContextInAction property
     * @return string|null
    */
    public function getNetworkLocationContextInAction(): ?string {
        $val = $this->getBackingStore()->get('networkLocationContextInAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkLocationContextInAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authorizedGroup', $this->getAuthorizedGroup());
        $writer->writeObjectValue('endpointMetaData', $this->getEndpointMetaData());
        $writer->writeStringValue('evidenceFile', $this->getEvidenceFile());
        $writer->writeStringValue('networkLocationContextInAction', $this->getNetworkLocationContextInAction());
    }

    /**
     * Sets the authorizedGroup property value. The authorizedGroup property
     * @param string|null $value Value to set for the authorizedGroup property.
    */
    public function setAuthorizedGroup(?string $value): void {
        $this->getBackingStore()->set('authorizedGroup', $value);
    }

    /**
     * Sets the endpointMetaData property value. The endpointMetaData property
     * @param EndpointMetaDataInfo|null $value Value to set for the endpointMetaData property.
    */
    public function setEndpointMetaData(?EndpointMetaDataInfo $value): void {
        $this->getBackingStore()->set('endpointMetaData', $value);
    }

    /**
     * Sets the evidenceFile property value. The evidenceFile property
     * @param string|null $value Value to set for the evidenceFile property.
    */
    public function setEvidenceFile(?string $value): void {
        $this->getBackingStore()->set('evidenceFile', $value);
    }

    /**
     * Sets the networkLocationContextInAction property value. The networkLocationContextInAction property
     * @param string|null $value Value to set for the networkLocationContextInAction property.
    */
    public function setNetworkLocationContextInAction(?string $value): void {
        $this->getBackingStore()->set('networkLocationContextInAction', $value);
    }

}
