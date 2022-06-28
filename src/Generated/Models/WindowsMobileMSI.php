<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsMobileMSI extends MobileLobApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $commandLine The command line.
    */
    private ?string $commandLine = null;
    
    /**
     * @var string|null $identityVersion The identity version.
    */
    private ?string $identityVersion = null;
    
    /**
     * @var bool|null $ignoreVersionDetection A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
    */
    private ?bool $ignoreVersionDetection = null;
    
    /**
     * @var string|null $productCode The product code.
    */
    private ?string $productCode = null;
    
    /**
     * @var string|null $productVersion The product version of Windows Mobile MSI Line of Business (LoB) app.
    */
    private ?string $productVersion = null;
    
    /**
     * @var bool|null $useDeviceContext Indicates whether to install a dual-mode MSI in the device context. If true, app will be installed for all users. If false, app will be installed per-user. If null, service will use the MSI package's default install context. In case of dual-mode MSI, this default will be per-user.  Cannot be set for non-dual-mode apps.  Cannot be changed after initial creation of the application.
    */
    private ?bool $useDeviceContext = null;
    
    /**
     * Instantiates a new WindowsMobileMSI and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsMobileMSI
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsMobileMSI {
        return new WindowsMobileMSI();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the commandLine property value. The command line.
     * @return string|null
    */
    public function getCommandLine(): ?string {
        return $this->commandLine;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'commandLine' => function (ParseNode $n) use ($o) { $o->setCommandLine($n->getStringValue()); },
            'identityVersion' => function (ParseNode $n) use ($o) { $o->setIdentityVersion($n->getStringValue()); },
            'ignoreVersionDetection' => function (ParseNode $n) use ($o) { $o->setIgnoreVersionDetection($n->getBooleanValue()); },
            'productCode' => function (ParseNode $n) use ($o) { $o->setProductCode($n->getStringValue()); },
            'productVersion' => function (ParseNode $n) use ($o) { $o->setProductVersion($n->getStringValue()); },
            'useDeviceContext' => function (ParseNode $n) use ($o) { $o->setUseDeviceContext($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the identityVersion property value. The identity version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        return $this->identityVersion;
    }

    /**
     * Gets the ignoreVersionDetection property value. A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
     * @return bool|null
    */
    public function getIgnoreVersionDetection(): ?bool {
        return $this->ignoreVersionDetection;
    }

    /**
     * Gets the productCode property value. The product code.
     * @return string|null
    */
    public function getProductCode(): ?string {
        return $this->productCode;
    }

    /**
     * Gets the productVersion property value. The product version of Windows Mobile MSI Line of Business (LoB) app.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        return $this->productVersion;
    }

    /**
     * Gets the useDeviceContext property value. Indicates whether to install a dual-mode MSI in the device context. If true, app will be installed for all users. If false, app will be installed per-user. If null, service will use the MSI package's default install context. In case of dual-mode MSI, this default will be per-user.  Cannot be set for non-dual-mode apps.  Cannot be changed after initial creation of the application.
     * @return bool|null
    */
    public function getUseDeviceContext(): ?bool {
        return $this->useDeviceContext;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('commandLine', $this->commandLine);
        $writer->writeStringValue('identityVersion', $this->identityVersion);
        $writer->writeBooleanValue('ignoreVersionDetection', $this->ignoreVersionDetection);
        $writer->writeStringValue('productCode', $this->productCode);
        $writer->writeStringValue('productVersion', $this->productVersion);
        $writer->writeBooleanValue('useDeviceContext', $this->useDeviceContext);
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
     * Sets the commandLine property value. The command line.
     *  @param string|null $value Value to set for the commandLine property.
    */
    public function setCommandLine(?string $value ): void {
        $this->commandLine = $value;
    }

    /**
     * Sets the identityVersion property value. The identity version.
     *  @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value ): void {
        $this->identityVersion = $value;
    }

    /**
     * Sets the ignoreVersionDetection property value. A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
     *  @param bool|null $value Value to set for the ignoreVersionDetection property.
    */
    public function setIgnoreVersionDetection(?bool $value ): void {
        $this->ignoreVersionDetection = $value;
    }

    /**
     * Sets the productCode property value. The product code.
     *  @param string|null $value Value to set for the productCode property.
    */
    public function setProductCode(?string $value ): void {
        $this->productCode = $value;
    }

    /**
     * Sets the productVersion property value. The product version of Windows Mobile MSI Line of Business (LoB) app.
     *  @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value ): void {
        $this->productVersion = $value;
    }

    /**
     * Sets the useDeviceContext property value. Indicates whether to install a dual-mode MSI in the device context. If true, app will be installed for all users. If false, app will be installed per-user. If null, service will use the MSI package's default install context. In case of dual-mode MSI, this default will be per-user.  Cannot be set for non-dual-mode apps.  Cannot be changed after initial creation of the application.
     *  @param bool|null $value Value to set for the useDeviceContext property.
    */
    public function setUseDeviceContext(?bool $value ): void {
        $this->useDeviceContext = $value;
    }

}
