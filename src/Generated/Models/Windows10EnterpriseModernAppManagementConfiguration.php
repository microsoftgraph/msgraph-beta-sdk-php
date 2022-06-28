<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10EnterpriseModernAppManagementConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $uninstallBuiltInApps Indicates whether or not to uninstall a fixed list of built-in Windows apps.
    */
    private ?bool $uninstallBuiltInApps = null;
    
    /**
     * Instantiates a new Windows10EnterpriseModernAppManagementConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EnterpriseModernAppManagementConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EnterpriseModernAppManagementConfiguration {
        return new Windows10EnterpriseModernAppManagementConfiguration();
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
            'uninstallBuiltInApps' => function (ParseNode $n) use ($o) { $o->setUninstallBuiltInApps($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the uninstallBuiltInApps property value. Indicates whether or not to uninstall a fixed list of built-in Windows apps.
     * @return bool|null
    */
    public function getUninstallBuiltInApps(): ?bool {
        return $this->uninstallBuiltInApps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('uninstallBuiltInApps', $this->uninstallBuiltInApps);
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
     * Sets the uninstallBuiltInApps property value. Indicates whether or not to uninstall a fixed list of built-in Windows apps.
     *  @param bool|null $value Value to set for the uninstallBuiltInApps property.
    */
    public function setUninstallBuiltInApps(?bool $value ): void {
        $this->uninstallBuiltInApps = $value;
    }

}
