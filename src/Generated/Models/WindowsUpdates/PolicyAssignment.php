<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new PolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyAssignment {
        return new PolicyAssignment();
    }

    /**
     * Gets the azureAdDeviceId property value. The Microsoft Entra identifier of the assigned device. Read-only.
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        $val = $this->getBackingStore()->get('azureAdDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureAdDeviceId'");
    }

    /**
     * Gets the deviceProfile property value. The deviceProfile property
     * @return DeviceProfile|null
    */
    public function getDeviceProfile(): ?DeviceProfile {
        $val = $this->getBackingStore()->get('deviceProfile');
        if (is_null($val) || $val instanceof DeviceProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceProfile'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'deviceProfile' => fn(ParseNode $n) => $o->setDeviceProfile($n->getObjectValue([DeviceProfile::class, 'createFromDiscriminatorValue'])),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policyId property value. The identifier of the assigned Windows Autopatch policy. Read-only.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the policyName property value. The display name of the assigned Windows Autopatch policy. Read-only.
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceProfile', $this->getDeviceProfile());
    }

    /**
     * Sets the azureAdDeviceId property value. The Microsoft Entra identifier of the assigned device. Read-only.
     * @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureAdDeviceId', $value);
    }

    /**
     * Sets the deviceProfile property value. The deviceProfile property
     * @param DeviceProfile|null $value Value to set for the deviceProfile property.
    */
    public function setDeviceProfile(?DeviceProfile $value): void {
        $this->getBackingStore()->set('deviceProfile', $value);
    }

    /**
     * Sets the policyId property value. The identifier of the assigned Windows Autopatch policy. Read-only.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyName property value. The display name of the assigned Windows Autopatch policy. Read-only.
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

}
