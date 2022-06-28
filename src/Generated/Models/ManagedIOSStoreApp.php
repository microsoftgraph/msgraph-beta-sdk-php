<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedIOSStoreApp extends ManagedApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IosDeviceType|null $applicableDeviceType Contains properties of the possible iOS device types the mobile app can run on.
    */
    private ?IosDeviceType $applicableDeviceType = null;
    
    /**
     * @var string|null $appStoreUrl The Apple AppStoreUrl.
    */
    private ?string $appStoreUrl = null;
    
    /**
     * @var string|null $bundleId The app's Bundle ID.
    */
    private ?string $bundleId = null;
    
    /**
     * @var IosMinimumOperatingSystem|null $minimumSupportedOperatingSystem Contains properties of the minimum operating system required for an iOS mobile app.
    */
    private ?IosMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * Instantiates a new ManagedIOSStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedIOSStoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedIOSStoreApp {
        return new ManagedIOSStoreApp();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableDeviceType property value. Contains properties of the possible iOS device types the mobile app can run on.
     * @return IosDeviceType|null
    */
    public function getApplicableDeviceType(): ?IosDeviceType {
        return $this->applicableDeviceType;
    }

    /**
     * Gets the appStoreUrl property value. The Apple AppStoreUrl.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->appStoreUrl;
    }

    /**
     * Gets the bundleId property value. The app's Bundle ID.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableDeviceType' => function (ParseNode $n) use ($o) { $o->setApplicableDeviceType($n->getObjectValue(array(IosDeviceType::class, 'createFromDiscriminatorValue'))); },
            'appStoreUrl' => function (ParseNode $n) use ($o) { $o->setAppStoreUrl($n->getStringValue()); },
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(IosMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. Contains properties of the minimum operating system required for an iOS mobile app.
     * @return IosMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?IosMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicableDeviceType', $this->applicableDeviceType);
        $writer->writeStringValue('appStoreUrl', $this->appStoreUrl);
        $writer->writeStringValue('bundleId', $this->bundleId);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
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
     * Sets the applicableDeviceType property value. Contains properties of the possible iOS device types the mobile app can run on.
     *  @param IosDeviceType|null $value Value to set for the applicableDeviceType property.
    */
    public function setApplicableDeviceType(?IosDeviceType $value ): void {
        $this->applicableDeviceType = $value;
    }

    /**
     * Sets the appStoreUrl property value. The Apple AppStoreUrl.
     *  @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value ): void {
        $this->appStoreUrl = $value;
    }

    /**
     * Sets the bundleId property value. The app's Bundle ID.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. Contains properties of the minimum operating system required for an iOS mobile app.
     *  @param IosMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?IosMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

}
