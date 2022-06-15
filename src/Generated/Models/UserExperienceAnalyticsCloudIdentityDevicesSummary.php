<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsCloudIdentityDevicesSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $deviceWithoutCloudIdentityCount The count of devices that are not cloud identity.
    */
    private ?int $deviceWithoutCloudIdentityCount = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsCloudIdentityDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsCloudIdentityDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsCloudIdentityDevicesSummary {
        return new UserExperienceAnalyticsCloudIdentityDevicesSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceWithoutCloudIdentityCount property value. The count of devices that are not cloud identity.
     * @return int|null
    */
    public function getDeviceWithoutCloudIdentityCount(): ?int {
        return $this->deviceWithoutCloudIdentityCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceWithoutCloudIdentityCount' => function (ParseNode $n) use ($o) { $o->setDeviceWithoutCloudIdentityCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deviceWithoutCloudIdentityCount', $this->deviceWithoutCloudIdentityCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceWithoutCloudIdentityCount property value. The count of devices that are not cloud identity.
     *  @param int|null $value Value to set for the deviceWithoutCloudIdentityCount property.
    */
    public function setDeviceWithoutCloudIdentityCount(?int $value ): void {
        $this->deviceWithoutCloudIdentityCount = $value;
    }

}
