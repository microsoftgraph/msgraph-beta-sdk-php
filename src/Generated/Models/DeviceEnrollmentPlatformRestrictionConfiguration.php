<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentPlatformRestrictionConfiguration extends DeviceEnrollmentConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $platformRestriction Restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $platformRestriction = null;
    
    /**
     * @var EnrollmentRestrictionPlatformType|null $platformType Type of platform for which this restriction applies. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
    */
    private ?EnrollmentRestrictionPlatformType $platformType = null;
    
    /**
     * Instantiates a new DeviceEnrollmentPlatformRestrictionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentPlatformRestrictionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentPlatformRestrictionConfiguration {
        return new DeviceEnrollmentPlatformRestrictionConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'platformRestriction' => function (ParseNode $n) use ($o) { $o->setPlatformRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'platformType' => function (ParseNode $n) use ($o) { $o->setPlatformType($n->getEnumValue(EnrollmentRestrictionPlatformType::class)); },
        ]);
    }

    /**
     * Gets the platformRestriction property value. Restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getPlatformRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->platformRestriction;
    }

    /**
     * Gets the platformType property value. Type of platform for which this restriction applies. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
     * @return EnrollmentRestrictionPlatformType|null
    */
    public function getPlatformType(): ?EnrollmentRestrictionPlatformType {
        return $this->platformType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('platformRestriction', $this->platformRestriction);
        $writer->writeEnumValue('platformType', $this->platformType);
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
     * Sets the platformRestriction property value. Restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the platformRestriction property.
    */
    public function setPlatformRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->platformRestriction = $value;
    }

    /**
     * Sets the platformType property value. Type of platform for which this restriction applies. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
     *  @param EnrollmentRestrictionPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?EnrollmentRestrictionPlatformType $value ): void {
        $this->platformType = $value;
    }

}
