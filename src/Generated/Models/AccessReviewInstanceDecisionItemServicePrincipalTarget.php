<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemServicePrincipalTarget extends AccessReviewInstanceDecisionItemTarget implements Parsable 
{
    /**
     * Instantiates a new accessReviewInstanceDecisionItemServicePrincipalTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItemServicePrincipalTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemServicePrincipalTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemServicePrincipalTarget {
        return new AccessReviewInstanceDecisionItemServicePrincipalTarget();
    }

    /**
     * Gets the appId property value. The appId for the service principal entity being reviewed.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'servicePrincipalDisplayName' => fn(ParseNode $n) => $o->setServicePrincipalDisplayName($n->getStringValue()),
            'servicePrincipalId' => fn(ParseNode $n) => $o->setServicePrincipalId($n->getStringValue()),
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
     * Gets the servicePrincipalDisplayName property value. The display name of the service principal whose access is being reviewed.
     * @return string|null
    */
    public function getServicePrincipalDisplayName(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalDisplayName'");
    }

    /**
     * Gets the servicePrincipalId property value. The servicePrincipalId property
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('servicePrincipalDisplayName', $this->getServicePrincipalDisplayName());
        $writer->writeStringValue('servicePrincipalId', $this->getServicePrincipalId());
    }

    /**
     * Sets the appId property value. The appId for the service principal entity being reviewed.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the servicePrincipalDisplayName property value. The display name of the service principal whose access is being reviewed.
     * @param string|null $value Value to set for the servicePrincipalDisplayName property.
    */
    public function setServicePrincipalDisplayName(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalDisplayName', $value);
    }

    /**
     * Sets the servicePrincipalId property value. The servicePrincipalId property
     * @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalId', $value);
    }

}
