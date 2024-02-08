<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics Device without Cloud Identity.
*/
class UserExperienceAnalyticsDeviceWithoutCloudIdentity extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceWithoutCloudIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceWithoutCloudIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceWithoutCloudIdentity {
        return new UserExperienceAnalyticsDeviceWithoutCloudIdentity();
    }

    /**
     * Gets the azureAdDeviceId property value. Azure Active Directory Device Id
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
     * Gets the deviceName property value. The tenant attach device's name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureAdDeviceId', $this->getAzureAdDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
    }

    /**
     * Sets the azureAdDeviceId property value. Azure Active Directory Device Id
     * @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureAdDeviceId', $value);
    }

    /**
     * Sets the deviceName property value. The tenant attach device's name.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

}
