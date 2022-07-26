<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceWithoutCloudIdentity extends Entity implements Parsable 
{
    /**
     * @var string|null $azureAdDeviceId Azure Active Directory Device Id
    */
    private ?string $azureAdDeviceId = null;
    
    /**
     * @var string|null $deviceName The tenant attach device's name.
    */
    private ?string $deviceName = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsDeviceWithoutCloudIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsDeviceWithoutCloudIdentity');
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
        return $this->azureAdDeviceId;
    }

    /**
     * Gets the deviceName property value. The tenant attach device's name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureAdDeviceId' => function (ParseNode $n) use ($o) { $o->setAzureAdDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureAdDeviceId', $this->azureAdDeviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
    }

    /**
     * Sets the azureAdDeviceId property value. Azure Active Directory Device Id
     *  @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value ): void {
        $this->azureAdDeviceId = $value;
    }

    /**
     * Sets the deviceName property value. The tenant attach device's name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

}
