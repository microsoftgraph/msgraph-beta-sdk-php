<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskWin32App extends WindowsKioskAppBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $classicAppPath This is the classicapppath to be used by v4 Win32 app while in Kiosk Mode
    */
    private ?string $classicAppPath = null;
    
    /**
     * @var string|null $edgeKiosk Edge kiosk (url) for Edge kiosk mode
    */
    private ?string $edgeKiosk = null;
    
    /**
     * @var int|null $edgeKioskIdleTimeoutMinutes Edge kiosk idle timeout in minutes for Edge kiosk mode. Valid values 0 to 1440
    */
    private ?int $edgeKioskIdleTimeoutMinutes = null;
    
    /**
     * @var WindowsEdgeKioskType|null $edgeKioskType Edge kiosk type for Edge kiosk mode. Possible values are: publicBrowsing, fullScreen.
    */
    private ?WindowsEdgeKioskType $edgeKioskType = null;
    
    /**
     * @var bool|null $edgeNoFirstRun Edge first run flag for Edge kiosk mode
    */
    private ?bool $edgeNoFirstRun = null;
    
    /**
     * Instantiates a new WindowsKioskWin32App and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskWin32App
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskWin32App {
        return new WindowsKioskWin32App();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classicAppPath property value. This is the classicapppath to be used by v4 Win32 app while in Kiosk Mode
     * @return string|null
    */
    public function getClassicAppPath(): ?string {
        return $this->classicAppPath;
    }

    /**
     * Gets the edgeKiosk property value. Edge kiosk (url) for Edge kiosk mode
     * @return string|null
    */
    public function getEdgeKiosk(): ?string {
        return $this->edgeKiosk;
    }

    /**
     * Gets the edgeKioskIdleTimeoutMinutes property value. Edge kiosk idle timeout in minutes for Edge kiosk mode. Valid values 0 to 1440
     * @return int|null
    */
    public function getEdgeKioskIdleTimeoutMinutes(): ?int {
        return $this->edgeKioskIdleTimeoutMinutes;
    }

    /**
     * Gets the edgeKioskType property value. Edge kiosk type for Edge kiosk mode. Possible values are: publicBrowsing, fullScreen.
     * @return WindowsEdgeKioskType|null
    */
    public function getEdgeKioskType(): ?WindowsEdgeKioskType {
        return $this->edgeKioskType;
    }

    /**
     * Gets the edgeNoFirstRun property value. Edge first run flag for Edge kiosk mode
     * @return bool|null
    */
    public function getEdgeNoFirstRun(): ?bool {
        return $this->edgeNoFirstRun;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classicAppPath' => function (ParseNode $n) use ($o) { $o->setClassicAppPath($n->getStringValue()); },
            'edgeKiosk' => function (ParseNode $n) use ($o) { $o->setEdgeKiosk($n->getStringValue()); },
            'edgeKioskIdleTimeoutMinutes' => function (ParseNode $n) use ($o) { $o->setEdgeKioskIdleTimeoutMinutes($n->getIntegerValue()); },
            'edgeKioskType' => function (ParseNode $n) use ($o) { $o->setEdgeKioskType($n->getEnumValue(WindowsEdgeKioskType::class)); },
            'edgeNoFirstRun' => function (ParseNode $n) use ($o) { $o->setEdgeNoFirstRun($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('classicAppPath', $this->classicAppPath);
        $writer->writeStringValue('edgeKiosk', $this->edgeKiosk);
        $writer->writeIntegerValue('edgeKioskIdleTimeoutMinutes', $this->edgeKioskIdleTimeoutMinutes);
        $writer->writeEnumValue('edgeKioskType', $this->edgeKioskType);
        $writer->writeBooleanValue('edgeNoFirstRun', $this->edgeNoFirstRun);
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
     * Sets the classicAppPath property value. This is the classicapppath to be used by v4 Win32 app while in Kiosk Mode
     *  @param string|null $value Value to set for the classicAppPath property.
    */
    public function setClassicAppPath(?string $value ): void {
        $this->classicAppPath = $value;
    }

    /**
     * Sets the edgeKiosk property value. Edge kiosk (url) for Edge kiosk mode
     *  @param string|null $value Value to set for the edgeKiosk property.
    */
    public function setEdgeKiosk(?string $value ): void {
        $this->edgeKiosk = $value;
    }

    /**
     * Sets the edgeKioskIdleTimeoutMinutes property value. Edge kiosk idle timeout in minutes for Edge kiosk mode. Valid values 0 to 1440
     *  @param int|null $value Value to set for the edgeKioskIdleTimeoutMinutes property.
    */
    public function setEdgeKioskIdleTimeoutMinutes(?int $value ): void {
        $this->edgeKioskIdleTimeoutMinutes = $value;
    }

    /**
     * Sets the edgeKioskType property value. Edge kiosk type for Edge kiosk mode. Possible values are: publicBrowsing, fullScreen.
     *  @param WindowsEdgeKioskType|null $value Value to set for the edgeKioskType property.
    */
    public function setEdgeKioskType(?WindowsEdgeKioskType $value ): void {
        $this->edgeKioskType = $value;
    }

    /**
     * Sets the edgeNoFirstRun property value. Edge first run flag for Edge kiosk mode
     *  @param bool|null $value Value to set for the edgeNoFirstRun property.
    */
    public function setEdgeNoFirstRun(?bool $value ): void {
        $this->edgeNoFirstRun = $value;
    }

}
