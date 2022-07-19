<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LearningProvider extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isEnabled The isEnabled property
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var array<LearningContent>|null $learningContents The learningContents property
    */
    private ?array $learningContents = null;
    
    /**
     * @var string|null $loginWebUrl The loginWebUrl property
    */
    private ?string $loginWebUrl = null;
    
    /**
     * @var string|null $longLogoWebUrlForDarkTheme The longLogoWebUrlForDarkTheme property
    */
    private ?string $longLogoWebUrlForDarkTheme = null;
    
    /**
     * @var string|null $longLogoWebUrlForLightTheme The longLogoWebUrlForLightTheme property
    */
    private ?string $longLogoWebUrlForLightTheme = null;
    
    /**
     * @var string|null $squareLogoWebUrlForDarkTheme The squareLogoWebUrlForDarkTheme property
    */
    private ?string $squareLogoWebUrlForDarkTheme = null;
    
    /**
     * @var string|null $squareLogoWebUrlForLightTheme The squareLogoWebUrlForLightTheme property
    */
    private ?string $squareLogoWebUrlForLightTheme = null;
    
    /**
     * Instantiates a new LearningProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.learningProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LearningProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LearningProvider {
        return new LearningProvider();
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'learningContents' => function (ParseNode $n) use ($o) { $o->setLearningContents($n->getCollectionOfObjectValues(array(LearningContent::class, 'createFromDiscriminatorValue'))); },
            'loginWebUrl' => function (ParseNode $n) use ($o) { $o->setLoginWebUrl($n->getStringValue()); },
            'longLogoWebUrlForDarkTheme' => function (ParseNode $n) use ($o) { $o->setLongLogoWebUrlForDarkTheme($n->getStringValue()); },
            'longLogoWebUrlForLightTheme' => function (ParseNode $n) use ($o) { $o->setLongLogoWebUrlForLightTheme($n->getStringValue()); },
            'squareLogoWebUrlForDarkTheme' => function (ParseNode $n) use ($o) { $o->setSquareLogoWebUrlForDarkTheme($n->getStringValue()); },
            'squareLogoWebUrlForLightTheme' => function (ParseNode $n) use ($o) { $o->setSquareLogoWebUrlForLightTheme($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the learningContents property value. The learningContents property
     * @return array<LearningContent>|null
    */
    public function getLearningContents(): ?array {
        return $this->learningContents;
    }

    /**
     * Gets the loginWebUrl property value. The loginWebUrl property
     * @return string|null
    */
    public function getLoginWebUrl(): ?string {
        return $this->loginWebUrl;
    }

    /**
     * Gets the longLogoWebUrlForDarkTheme property value. The longLogoWebUrlForDarkTheme property
     * @return string|null
    */
    public function getLongLogoWebUrlForDarkTheme(): ?string {
        return $this->longLogoWebUrlForDarkTheme;
    }

    /**
     * Gets the longLogoWebUrlForLightTheme property value. The longLogoWebUrlForLightTheme property
     * @return string|null
    */
    public function getLongLogoWebUrlForLightTheme(): ?string {
        return $this->longLogoWebUrlForLightTheme;
    }

    /**
     * Gets the squareLogoWebUrlForDarkTheme property value. The squareLogoWebUrlForDarkTheme property
     * @return string|null
    */
    public function getSquareLogoWebUrlForDarkTheme(): ?string {
        return $this->squareLogoWebUrlForDarkTheme;
    }

    /**
     * Gets the squareLogoWebUrlForLightTheme property value. The squareLogoWebUrlForLightTheme property
     * @return string|null
    */
    public function getSquareLogoWebUrlForLightTheme(): ?string {
        return $this->squareLogoWebUrlForLightTheme;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeCollectionOfObjectValues('learningContents', $this->learningContents);
        $writer->writeStringValue('loginWebUrl', $this->loginWebUrl);
        $writer->writeStringValue('longLogoWebUrlForDarkTheme', $this->longLogoWebUrlForDarkTheme);
        $writer->writeStringValue('longLogoWebUrlForLightTheme', $this->longLogoWebUrlForLightTheme);
        $writer->writeStringValue('squareLogoWebUrlForDarkTheme', $this->squareLogoWebUrlForDarkTheme);
        $writer->writeStringValue('squareLogoWebUrlForLightTheme', $this->squareLogoWebUrlForLightTheme);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the learningContents property value. The learningContents property
     *  @param array<LearningContent>|null $value Value to set for the learningContents property.
    */
    public function setLearningContents(?array $value ): void {
        $this->learningContents = $value;
    }

    /**
     * Sets the loginWebUrl property value. The loginWebUrl property
     *  @param string|null $value Value to set for the loginWebUrl property.
    */
    public function setLoginWebUrl(?string $value ): void {
        $this->loginWebUrl = $value;
    }

    /**
     * Sets the longLogoWebUrlForDarkTheme property value. The longLogoWebUrlForDarkTheme property
     *  @param string|null $value Value to set for the longLogoWebUrlForDarkTheme property.
    */
    public function setLongLogoWebUrlForDarkTheme(?string $value ): void {
        $this->longLogoWebUrlForDarkTheme = $value;
    }

    /**
     * Sets the longLogoWebUrlForLightTheme property value. The longLogoWebUrlForLightTheme property
     *  @param string|null $value Value to set for the longLogoWebUrlForLightTheme property.
    */
    public function setLongLogoWebUrlForLightTheme(?string $value ): void {
        $this->longLogoWebUrlForLightTheme = $value;
    }

    /**
     * Sets the squareLogoWebUrlForDarkTheme property value. The squareLogoWebUrlForDarkTheme property
     *  @param string|null $value Value to set for the squareLogoWebUrlForDarkTheme property.
    */
    public function setSquareLogoWebUrlForDarkTheme(?string $value ): void {
        $this->squareLogoWebUrlForDarkTheme = $value;
    }

    /**
     * Sets the squareLogoWebUrlForLightTheme property value. The squareLogoWebUrlForLightTheme property
     *  @param string|null $value Value to set for the squareLogoWebUrlForLightTheme property.
    */
    public function setSquareLogoWebUrlForLightTheme(?string $value ): void {
        $this->squareLogoWebUrlForLightTheme = $value;
    }

}
